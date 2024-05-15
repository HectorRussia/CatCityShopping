<?php

    //ค่อยทำแยกlogin admin
    session_start();
    include('../server-login/database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_cat_dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.css">
    
    <!-- Custom styles for this template -->
    <link href="../sidebars.css" rel="stylesheet">
    <script src="../sidebars.js"></script>
</head>
<body>
    <div class="row">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="fa-solid fa-house" style="font-size: 20px; margin-right: 15px;"></i> 
            <span class="fs-4">Dashboard_admin</span>
            </a>
            <div class="text-center mt-3">
                <ul class="nav nav-pills flex-column mb-auto">

                    <li style="font-size: 20px; margin-right: 10px;">
                        
                        <a href="index.php?insert_type_cat" class="nav-link text-white">
                            <i class="fa-solid fa-paw" ></i>  Add type cat
                        </a>

                    </li>

                    <li style="font-size: 20px; margin-right: 10px;">
                        
                        <a href="index.php?insert_cat" class="nav-link text-white">
                            <i class="fa-solid fa-paw" ></i>  Insert cat
                        </a>

                    </li>

                    <li style="font-size: 20px; margin-right: 10px;">

                        <a href="index.php?insert_type_product" class="nav-link text-white">
                            <i class="fa-solid fa-basket-shopping" ></i>  Add type product
                        </a>
                    </li>

                    <li style="font-size: 20px; margin-right: 10px;">

                        <a href="index.php?insert_product" class="nav-link text-white">
                            <i class="fa-solid fa-basket-shopping" ></i>  Insert product
                        </a>
                    </li>

                    <li style="font-size: 20px; margin-right: 10px;">

                        <a href="index.php?grooming" class="nav-link text-white">
                            <i class="fa-solid fa-paw" ></i>  List Grooming
                        </a>

                    </li>

                    <li style="font-size: 20px; margin-right: 10px;">

                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-paw" ></i>  All payment
                        </a>

                    </li>

                    <li style="font-size: 20px; margin-right: 10px;">

                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-paw" ></i>  Log out
                        </a>

                    </li>
                </ul>
            </div>
            <div class="b-example-divider"></div>
        </div>
        <div class="col mt-3">
            <?php
                if(isset($_GET['insert_type_cat']))
                {
                    include('insert_type_cat.php');
                }
                if(isset($_GET['insert_cat']))
                {
                    include('insert_cat.php');
                }
                if(isset($_GET['insert_type_product']))
                {
                    include('insert_type_product.php');
                }
                if(isset($_GET['insert_product']))
                {
                    include('insert_product.php');
                }
                if(isset($_GET['all_payment']))
                {
                    include('all_payment.php');
                }
                if(isset($_GET['grooming']))
                {
                    include('grooming.php');
                }
            ?>
        </div>
    </div>

</body>
</html>




