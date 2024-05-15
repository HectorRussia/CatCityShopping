<?php

    session_start();
    include('../server-login/database.php');
    include('../function.php/function_common.php'); //IP

    //php code to access user id
    $user_email = get_user_email();
    $get_user = "SELECT * FROM `user_login` WHERE email=?";
    $stmt_user = mysqli_prepare($mysqli, $get_user);
    mysqli_stmt_bind_param($stmt_user, "s", $user_email);
    mysqli_stmt_execute($stmt_user);
    $result = mysqli_stmt_get_result($stmt_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['id'];

    //getting total items and total price of all items
    $get_ip_address = getIPAddress();

    $total_price = 0;
    $cart_query_price = "SELECT * FROM `cart_details` WHERE ip_address=?";
    $stmt_cart_price = mysqli_prepare($mysqli, $cart_query_price);
    mysqli_stmt_bind_param($stmt_cart_price, "s", $get_ip_address);
    mysqli_stmt_execute($stmt_cart_price);
    $result_cart_price = mysqli_stmt_get_result($stmt_cart_price);
    $invoice_number = mt_rand(); // Randomly generate an invoice number
    $status = 'pending';
    $count_products = mysqli_num_rows($result_cart_price);

    while ($row_price = mysqli_fetch_array($result_cart_price)) 
    {
        $product_id = $row_price['product_id'];
        $select_product = "SELECT * FROM `add_products` WHERE product_id=?";
        $stmt_product = mysqli_prepare($mysqli, $select_product);
        mysqli_stmt_bind_param($stmt_product, "i", $product_id);
        mysqli_stmt_execute($stmt_product);
        $run_price = mysqli_stmt_get_result($stmt_product);

        while ($row_product_price = mysqli_fetch_array($run_price)) 
        {
            $product_price = $row_product_price['product_price'];
            $quantity = $row_price['quantity'];
            $product_values = number_format($product_price * $quantity, 2);
            $total_price += $product_values;
        }
    }

    // Insert into user_orders
    $insert_orders = "INSERT INTO `user_orders` (user_id, amount_due, invoice_number, total_products, order_date, order_status)
    VALUES (?, ?, ?, ?, NOW(), ?)";
    $stmt_insert_orders = mysqli_prepare($mysqli, $insert_orders);
    mysqli_stmt_bind_param($stmt_insert_orders, "idiss", $user_id, $total_price, $invoice_number, $count_products, $status);
    $result_query = mysqli_stmt_execute($stmt_insert_orders);

    // Insert into orders_pending for each item in the cart
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address=?";
    $stmt_cart = mysqli_prepare($mysqli, $cart_query);
    mysqli_stmt_bind_param($stmt_cart, "s", $get_ip_address);
    mysqli_stmt_execute($stmt_cart);
    $result_cart = mysqli_stmt_get_result($stmt_cart);

    while ($row_cart = mysqli_fetch_array($result_cart)) 
    {
        $product_id = $row_cart['product_id'];
        $quantity = $row_cart['quantity'];

        $insert_pending_orders = "INSERT INTO `orders_pending` (user_id, invoice_number, product_id, quantity, order_status)
                    VALUES (?, ?, ?, ?, ?)";
        $stmt_insert_pending_orders = mysqli_prepare($mysqli, $insert_pending_orders);
        mysqli_stmt_bind_param($stmt_insert_pending_orders, "iiiss", $user_id, $invoice_number, $product_id, $quantity, $status);
        $result_pending_orders = mysqli_stmt_execute($stmt_insert_pending_orders);
    }

    // Empty the cart
    $empty_cart = "DELETE FROM `cart_details` WHERE ip_address=?";
    $stmt_empty_cart = mysqli_prepare($mysqli, $empty_cart);
    mysqli_stmt_bind_param($stmt_empty_cart, "s", $get_ip_address);
    $result_delete = mysqli_stmt_execute($stmt_empty_cart);

    if ($result_query) 
    {
        echo "<script>alert('Order submitted successfully')</script>";
        echo "<script>window.open('../home/check_out.php','_self')</script>";
    } 
    else 
    {
        echo "<script>alert('Error submitting order')</script>";
    }

?>