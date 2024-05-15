<?php

    include('../server-login/database.php');
    include('../function.php/function_common.php');

    session_start();
    
    if(isset($_SESSION["user_id"]))
    {
        $mysqli=require __DIR__."/../server-login/database.php";

        $sql="SELECT * FROM user_login WHERE id={$_SESSION["user_id"]}";
    
        $result=$mysqli->query($sql);

        $user=$result->fetch_assoc();
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.css">
        <link rel="stylesheet" href="../css-img.css">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!--js-bootstarp-->
        <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </head>
    <style>
        .kbank
        {
            width: 400px;
            height: 200px;
            margin-left: 25%;
        }
        .QR
        {
            width: 400px;
            height: 400px;
            margin-left: 25%;
        }
        .price 
        {
            margin-left: 50%;
            margin-bottom: 2%;
        }
        .price2
        {
            margin-left: 32%;
            margin-bottom: 2%;
        }
    </style>
<body>

    <?php if(isset($user)):?>
        
        <div class="mt-3">
            <h2 class="text-center">Payment</h2>
            <br>
        </div>
        
    <div class="container mt-3 ">       
            <?php
                //getting info user

                $user_email = get_user_email();
                $select_user = "SELECT * FROM `user_login` WHERE email = ?";
                $stmt = mysqli_prepare($mysqli, $select_user);
                mysqli_stmt_bind_param($stmt, "s", $user_email);
                mysqli_stmt_execute($stmt);
                $result_user = mysqli_stmt_get_result($stmt);

                while ($get_user = mysqli_fetch_assoc($result_user)) {
                    $user_id = $get_user['id'];
                    $username = $get_user['username'];
                    $surname = $get_user['user_surname'];
                    $email = $get_user['email'];
                    $address = $get_user['user_address'];
                    $contact = $get_user['user_contact'];

                    echo "

                    <!--user_name-->
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>Name : </label> $username
                    </div>

                    <!--user_surname-->
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>Surname : </label> $surname
                    </div>

                    <!--email-->
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>Email : </label> $email
                    </div>

                    <!--address-->
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>Address : </label> $address
                    </div>

                    <!--contact-->
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>Contact : </label> $contact
                    </div>
                    ";
                }

                mysqli_stmt_close($stmt);
            ?>

                <!--list item -->
                <div class='form-outline mb-4 w-50 m-auto' style="display: flex; align-items: center;">
                    <label for='user_name' class='form-label'>Item</label>
                    <span class="price">Price</span>
                </div>

                <?php 

                    list_item_on_payment(); 

                ?>

                <!--total_price-->
                <div class='form-outline mb-4 w-50 m-auto'> <!--แก้บัคพน ต้องใช้ where invoice ไม่ใช่ user_id-->
                    <label for='user_name' class='form-label'>Total_price : </label><?php show_amout_due();  ?>
                </div>
        
                <!--Invoice Number-->
                <div class='form-outline mb-4 w-50 m-auto'> <!--แก้บัคพน ต้องใช้ where invoice ไม่ใช่ user_id-->
                    <label for='user_name' class='form-label'>Invoice Number : </label><?php show_invoice_number(); ?>
                </div>
        
                <!--banking img-->
                <div class='form-outline mb-4 w-50 m-auto'>
                    <label for='user_name' class='form-label'>Banking</label>
                    <br>
                </div>
                <img src='../image/kbank.png' alt='' class='kbank'> 
        
                <!--QR code img-->
                <div class='form-outline mb-4 w-50 m-auto'>
                    <label for='user_name' class='form-label'>QR-code</label>
                    <br>
                </div>
                <img src='../image/IMG_4609.png' alt='' class='QR'> 
                
                <!-- form for payment -->
                <form action="../user_payment/complete_payment.php" method="post" enctype="multipart/form-data">
                    
                    <!-- hidden input for user_id -->
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">

                    <!-- upload QR code evidence of money transfer -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="image_qrcode" class="form-label">Please upload evidence of money transfer.</label>
                        <input type="file" name="qrcode" id="qrcode" class="form-control-file" required="required">
                    </div>
                    <br>
                    <!-- payment button -->
                    <div class="form-outline mb-4 w-50 m-auto d-flex justify-content-center">
                        <input type="submit" name="payment" class="btn btn-info mb-3 px-3" value="Notification of payment">
                    </div>

                </form>
    </div>


    <?php else:?>
        <p><a href="../login.php">Login</a> or <a href="../registor.html">Register</a></p>   

    <?php endif; ?>
</body>
</html>
