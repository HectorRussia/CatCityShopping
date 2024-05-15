<?php

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
                                <a class="nav-link text-dark " aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="user_page.php"><i class="fa-solid fa-user"></i> User</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="cart.php"><i class="fa-solid fa-basket-shopping"></i>Cart</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="farmcat.php"><i class="fa-solid fa-paw"></i> Farm cat</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="shoping.php"><i class="fa-solid fa-cart-shopping"></i> shoping</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-solid fa-phone-volume"></i> contact us</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> logout</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container mt-3 fade-in">
            <div style="padding-left: 15%;">
                <h4 style="color: #1151c0;"><img src="../image/home_index/2.jpg" style="width: 200px; hieght: 200px;"> <b>Hi <?=htmlspecialchars($user["username"])?> Welcome to the Cat city</b>  <img src="../image/home_index/2.jpg" style="width: 200px; hieght: 200px;"></h4>
            </div>
        <br>
        <h1><b>Various services for your beloved cat</b></h1>
        <br>
        <hr class="blue-line2">

        <div class="row mt-5 ml-3">

            <div class="col-md-4">
                <h3>Grooming service</h3>
                <div class="mt-4">
                    <h5>We have a grooming service with experienced staff and modern equipment. We're sure your cat will love it.</h5>
                    <div class="mt-5"><h4 style="color: #1151c0;"><a href="grooming.php">Let's Grooming</a></h4></div>  
                </div>
            </div>

            <div class="col-md-3">
                <div class="img-responsive img-circle2 card" style="margin-top: -25px;"> 
                    <img src="../image/home_index/3.jpg" class="img-fluid" >
                </div>
            </div>

            <div class="col-md-3">
                <div class="img-responsive img-circle2 card" style="margin-top: -25px;"> 
                    <img src="../image/home_index/1.jpg" class="img-fluid" >
                </div>
            </div>

        </div>
        
        <div class="row mt-3">
            <div class="mt-lg-5">
                <div class="mt-4">
                    <div class="img-responsive ">
                        <img src="../image/home_index/4.jpg" width="500" height="300" >
                    </div>
                </div>
            </div>

            <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <h4 style="color: #1151c0;"><a href="boarding_service.php">Let's us to take care of your cat.</a></h4>
                    <div class="mt-4">
                        <h1><b>Cat boarding service</b></h1>
                        <h1><b>and good care</b></h1>
                        <br>
                        <hr class="blue-line">
                        <div class="mt-4">
                            <h5>We have a clean, safe place with staff</h5>
                            <h5>to take care of your cat 24 hours a day</h5>
                            <h5>along with premium food for your cat.</h5>
                        </div>
                    </div>
                </div>
            </div>

          <!--  ในอนาคตมี event อะไรค่อยเพิ่ม
            <div class="mt-lg-5">
                <div class="mt-4">
                    <h4 style="color: #1151c0;">For Individuals</h4>
                    <div class="mt-4">
                        <h1><b>Tax Advice and</b></h1>
                        <h1><b>Financial Planning</b></h1>
                        <br>
                        <hr class="blue-line">
                        <div class="mt-4">
                            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing</h5>
                            <h5>elit. Aenean commodo ligula eget dolor. Aenean</h5>
                            <h5>massa. Cum sociis natoque penatibus et magnis</h5>
                        </div>
                    </div>
                </div>
             </div>

             <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <div class="img-responsive">
                        <img src="../image/2.jpg" width="500" height="300">
                    </div>
                </div>
            </div> -->
            
            <div class="mt-lg-5 ">
                <div class="mt-4 ">
                    <h1><b>Testimonials from happy clients</b></h1>
                    <br>
                    <hr class="blue-line3">
                    <div class="row mt-5 ml-4">
                        <div class="md-4">
                            <div class="img-circle">
                                <img src="../image/for_web/2.jpg" width="200" height="200">
                            </div>                                                        
                        </div>
                        
                        <div class="md-4 ml-2 mt-3">
                            <div class="ml-5">
                                <h5 class="custom-text">I am very impressed with the service here.</h5>
                                <h5 class="custom-text">I regularly use the cat bathing service here</h5>
                                <h5 class="custom-text">and the products here are of high quality </h5>
                                <div class="mt-3">
                                    <h5 class="custom-text"><b>- Robert Downey Jr -</b></h5>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-5">
                            <div class="md-4">
                                <div class="img-circle">
                                    <img src="../image/for_web/3.jpg" width="200" height="200">
                                </div>                                                        
                            </div>
                                                       
                            <div class="md-4 ml-2 mt-3">
                                <div class="ml-5">
                                    <h5 class="custom-text">Throughout the past 3 years,</h5>
                                    <h5 class="custom-text">I have always used this service.</h5>
                                    <h5 class="custom-text">I have purchased products here</h5>
                                    <h5 class="custom-text">and sometimesi come to use</h5>
                                    <h5 class="custom-text">the cat boarding service.</h5>
                                    <div class="mt-3">
                                        <h5 class="custom-text"><b>- Tom Hiddleston -</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="mt-5">
        <div class="custom-rectangle">
            <div class="box-green">
                <div id="bold-text"> 
                    Get in touch
                </div>
            </div>
            <div class="text-p">
                <P>If you have any doubts or questions, you can contact us at any time. We are always ready to serve customers.</P>
            </div>
            <div class="text-p">
                <p>Our company policy requires us to register as a member before we can access the store page.</p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="custom-rectangle2">
                
                <div class="row">
                        <div class="mt-4 ml-3">
                            <h1><b>Cat city</b></h1>
                            <div class="mt-4">
                                <h5 class="custom-text2">At Cat City, we take pride in our unwavering commitment</h5>
                                <h5 class="custom-text2">to service excellence and the genuine love </h5>
                                <h5 class="custom-text2">we extend to our customers'</h5>
                            </div>
                        </div>

                        <div class="ml-5 burapa2">
                            <div class="mt-4 ml-3">
                                <h5 class="custom-text3">Get in touch</h5>
                                <div class="mt-3 ">
                                    <h5 class="custom-text2">095-768-7460</h5>
                                    <h5 class="custom-text2">www.cat-city.com</h5>
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