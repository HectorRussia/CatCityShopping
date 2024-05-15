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

    if (isset($_GET['buy_cat'])) 
    {
        //select id_cat
        $get_id_cat = $_GET['buy_cat'];
        $select_cat = "SELECT * FROM add_cat WHERE id_cat='$get_id_cat' ";
        $result_cat = mysqli_query($mysqli, $select_cat);
        $row_cat = mysqli_fetch_assoc($result_cat);
    
        $id_cat = $row_cat['id_cat'];
        $total_price = $row_cat['price_cat'];
    
        $invoice_cat = mt_rand(); // Randomly generate an invoice number
        $status = 'pending';
    
        $insert_order = "INSERT INTO preorder_cat (user_id,invoice_cat, order_date) VALUES (?,?, NOW())";
        $stmt_insert_order = mysqli_prepare($mysqli, $insert_order);
        mysqli_stmt_bind_param($stmt_insert_order,"ii",$user_id,$invoice_cat);
        mysqli_stmt_execute($stmt_insert_order);


        // prepared statement to prevent SQL injection
        $insert_cat = "INSERT INTO cat_orders (id_cat, user_id, invoice_cat, Total_price, order_date, status) VALUES (?, ?, ?, ?, NOW(), ?)";
        $stmt = mysqli_prepare($mysqli, $insert_cat);
    
        mysqli_stmt_bind_param($stmt, "iiiss", $id_cat, $user_id, $invoice_cat, $total_price, $status);
        $result_insert = mysqli_stmt_execute($stmt);
    
        mysqli_stmt_close($stmt);
    
        if ($result_insert) 
        {
            echo "<script>alert('Order submitted successfully')</script>";
            echo "<script>window.open('../home/buy_cat.php','_self')</script>";
        } 
        else 
        {
            echo "<script>alert('Error submitting order')</script>";
        }
    } 
    else 
    {
        // 'buy_cat' is not set, handle the error or redirect as needed
        echo "Error: 'buy_cat' is not set in the URL.";
    }
    


?>