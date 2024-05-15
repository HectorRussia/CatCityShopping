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
    <link rel="stylesheet" href="../css-img2.css"><!--ใช้อันนี้เพราะถ้าใช้ css-img มันบัคโค้ดทับกันการ์ดโชวเละหมด-->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--js-bootstarp-->
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <style>
        .fade-in 
        {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 3s ease, transform 0.5s ease;
        }

        .fade-in2 
        {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .cat_img
        {
            width: 180px;
            height: 180px;
            object-fit: contain;
        }
    </style>
    <script>
        // สร้างเอฟเฟกต์ fade-in เมื่อเลื่อนลงมา
        $(document).ready(function () 
        {
            $('.fade-in').each(function () 
            {
                var elementTop = $(this).offset().top;
                var windowHeight = $(window).height();
                if (elementTop < windowHeight) 
                {
                    $(this).css({
                        'opacity': 1,
                        'transform': 'translateY(0)'
                    });
                }
            });

            $('.fade-in2').each(function () 
            {
                var elementTop = $(this).offset().top;
                var windowHeight = $(window).height();
                if (elementTop < windowHeight) 
                {
                    $(this).css({
                        'opacity': 1,
                        'transform': 'translateY(0)'
                    });
                }
            });
        });
    </script>
</head>
<body>
        <?php if(isset($user)):?>
            <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fade-in2">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><h1><img src="../image/cat.jpg" style="width: 150pt; height: 150pt;" ><b>Cat city</b></h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark " aria-current="page" href="../home/index.php"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="../home/user_page.php"><i class="fa-solid fa-user"></i> User</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="../home/cart.php"><i class="fa-solid fa-basket-shopping"></i>Cart</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="../home/farmcat.php"><i class="fa-solid fa-paw"></i> Farm cat</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="../home/shoping.php"><i class="fa-solid fa-cart-shopping"></i> shoping</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-solid fa-phone-volume"></i> contact us</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="../home/logout.php"><i class="fa-solid fa-right-from-bracket"></i> logout</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container mt-2 fade-in">
                <div style="padding-left: 22%;">
                    <h4 style="color: #1151c0;"><img src="../image/home_index/2.jpg" style="width: 200px;"><b>your family members</b><img src="../image/home_index/2.jpg" style="width: 200px;"></h4>
                </div>
            <br>
        </div>         
   
        <?php
            $user_id = getUserId();
            $select_catorder = "SELECT * FROM cat_orders WHERE user_id = $user_id ORDER BY order_cat_id DESC"; //ตามความเป็นจริงยังไงก็ต้องเอาประวัติล่าสุดโชวก่อน
            $result_catorder = mysqli_query($mysqli, $select_catorder);
            $number_row = mysqli_num_rows($result_catorder);

            if($number_row > 0) 
            {
                echo "
                    <div class='container'>
                        <div class='row'>
                            <table class='table table-bordered text-center m-auto mt-3'>
                                <thead>
                                    <tr class='table-primary'>                        
                                        <th>type cat</th>
                                        <th>Gender cat</th>
                                        <th>Image cat</th>
                                        <th>invoice</th>
                                        <th>Total price</th>
                                    </tr>
                                </thead>
                                <tbody>
                ";

                while ($row = mysqli_fetch_assoc($result_catorder)) 
                {
                    $invoice = $row['invoice_cat'];
                    $total_price = $row['Total_price'];

                    $id_cat = $row['id_cat'];
                    $select_cat = "SELECT * FROM add_cat WHERE id_cat=$id_cat";
                    $result_cat = mysqli_query($mysqli, $select_cat);
                    $row_cat = mysqli_fetch_assoc($result_cat);
                    $type_cat = $row_cat['type_cat'];
                    $gender = $row_cat['gender_cat'];
                    $image = $row_cat['image1'];

                    $select_typecat = "SELECT * FROM type_cat WHERE type_id=$type_cat";
                    $result_type = mysqli_query($mysqli, $select_typecat);
                    $row_type = mysqli_fetch_assoc($result_type);
                    $type_cats = $row_type['type_cats'];

                    echo "
                        <tr>                        
                            <td>$type_cats</td>
                            <td>$gender</td>
                            <td><img src='../admin_cat/cat_images/$image' class='cat_img'></td>
                            <td>$invoice</td> 
                            <td>$total_price $</td> 
                        </tr>                            
                    ";
                }

                echo "
                                </tbody>
                            </table>
                        </div>
                    </div>
                ";
            } 
            else 
            {
                echo "<h2 class='text-center text-danger'>Not have buy cat</h2>";
            }
        ?>


    <div class="mt-5">
        <div class="custom-rectangle">
            <div class="box-green">
                <div id="bold-text">
                    Get in touch
                </div>
            </div>
            <div class="text-p">
                <P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</P>
            </div>
            <div class="text-p2">
                <p> Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="custom-rectangle2">
                
                <div class="row">
                        <div class="mt-4 ml-3">
                                <h1><b>Cat city</b></h1>
                                <div class="mt-4">
                                    <h5 class="custom-text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h5>
                                    <h5 class="custom-text2">Aenean commodo ligula eget dolor. Aenean massa.</h5>
                                    <h5 class="custom-text2">et magnis dis parturient montes,nascetur ridiculus mus.</h5>
                                </div>
                        </div>

                        <div class="ml-5 burapa2">
                            <div class="mt-4 ml-3">
                                <h5 class="custom-text3">Get in touch</h5>
                                <div class="mt-3 ">
                                    <h5 class="custom-text2">0123-456789</h5>
                                    <h5 class="custom-text2">example@domain.com</h5>
                                    <h5 class="custom-text2">1234 Lincoln Street, Frankfurt, Germany</h5>
                                    <br>
                                    <div>
                                        <h5>
                                            <i class="fa-brands fa-facebook fa-lg"  style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-instagram fa-lg" style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-tiktok"          style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-twitter fa-lg"   style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-github fa-lg"    style="margin-right: 10px;"></i>
                                        </h5> 
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div> 

    <footer style="background-color: black;">
        <div class="container" >
            <p class="m-0 text-center text-white py-4">Copy Right &copy;2023 cat city</p>
        </div>
    </footer>


        <?php else:?>
            <p><a href="../login.php">Login</a> or <a href="../registor.html">Register</a></p>   

        <?php endif; ?>

</body>
</html>