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
    <title>Farmcat</title>
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
                                <a class="nav-link text-dark" href="#"><i class="fa-solid fa-user"></i> User</a> 
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

        <div class="container mt-5 fade-in">
            <div style="padding-left: 23%;">
                <h4 style="color: #1151c0;"><img src="../image/home_index/2.jpg" style="width: 200px;"><b>Welcome to Farmcat</b><img src="../image/home_index/2.jpg" style="width: 200px;"></h4>
            </div>
            <br>
            <h1><b>Our farm has several healthy cat breeds</b></h1>
            <br>
            <hr class="blue-line2">
            <div class="row mt-5 ml-3">
                <div class="col-md-4">
                    <h4>
                        Sending healthy cats to new families There is a health check, disease examination and health guarantee for all animals.
                        New owners can inquire about the care and upbringing of their cats at any time.
                    </h4>
                </div>
                <div class="col-md-3">
                    <div class="img-responsive img-circle2 card" style="margin-top: -25px;"> 
                        <img src="../image/farmcat/brititsh3.jpg" class="img-fluid" >
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="img-responsive img-circle2 card" style="margin-top: -25px;"> 
                        <img src="../image/farmcat/4.jpg" class="img-fluid" >
                    </div>
                </div>
            </div>
        
            <div class="row mt-3">
                <div class="mt-lg-5">
                    <div class="mt-4">
                        <div class="img-responsive">
                            <img src="../image/farmcat/6.jpg" width="500" height="300" style="border-radius: 10px;">
                        </div>
                    </div>
                </div>

                <div class="mt-lg-5 ml-lg-5 ">
                    <div class="mt-4 ml-5">
                        <div class="mt-4">
                            <h1><b>Scottish Fold</b></h1>
                            <br>
                            <hr class="blue-line">
                            <div class="mt-4">
                                <h5>A cat breed that has only recently</h5>
                                <h5>been discovered Originating from Scotland</h5>
                                <h5>The first cat discovered had ears</h5>
                                <h5>that were only slightly folded</h5>
                                <div class="mt-5"><h4 style="color: #1151c0;"><a href="scottish_fold.php">Let's see Scottish Fold </a></h4></div>  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-lg-5">
                    <div class="mt-4">
                        <div class="mt-4">
                            <h1><b>British Shorthair</b></h1>
                            <br>
                            <hr class="blue-line">
                            <div class="mt-4">
                                <h5>He is a calm, neat, and not angry cat.</h5>
                                <h5> Don't like making noise or destroying things.</h5>
                                <h5>Be friendly to slave owners of all ages</h5>
                                <h5>They have a slightly longer lifespan than other cat breeds.</h5>
                                <div class="mt-5"><h4 style="color: #1151c0;"><a href="british.php">Let's see British Shorthair </a></h4></div>  
                            </div>
                        </div>
                    </div>
                </div>

             <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <div class="img-responsive">
                    <img src="../image/farmcat/7.jpg" width="500" height="300" style="border-radius: 10px;">
                    </div>
                </div>
            </div>

            
            <div class="mt-lg-5">
                <div class="mt-4">
                    <div class="img-responsive">
                        <img src="../image/farmcat/8.jpg" width="500" height="300" style="border-radius: 10px;">
                    </div>
                </div>
            </div>

            <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <div class="mt-4">
                        <h1><b>Persian</b></h1>
                        <br>
                        <hr class="blue-line">
                        <div class="mt-4">
                            <h5>It stands out for its elegant appearance long </h5>
                            <h5>fluffy soft fur gentle personality and very cutie.</h5>
                            <h5>sociable Plus the singing voice is cute and worth</h5>
                            <h5>listening to You can easily be a slave owner.</h5>
                            <div class="mt-5"><h4 style="color: #1151c0;"><a href="persian.php">Let's see Persian</a></h4></div>  
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-lg-5">
                <div class="mt-4">
                    <div class="mt-4">
                        <h1><b>Ragdoll</b></h1>
                        <br>
                        <hr class="blue-line">
                        <div class="mt-4">
                            <h5>Ragdolls are known to be the most peaceful cats</h5>
                            <h5>in the world compared to other domestic cat breeds.</h5>
                            <h5>This breed is happy with itself Not demanding and tolerant</h5>
                            <h5>of many situations With a gentle and calm demeanor This</h5>
                            <h5>makes Ragdoll cats loyal pets that love their owners.</h5>
                            <div class="mt-5"><h4 style="color: #1151c0;"><a href="ragdoll.php">Let's see Ragdoll </a></h4></div>  
                        </div>
                    </div>
                </div>
             </div>

             <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <div class="img-responsive">
                    <img src="../image/farmcat/9.jpg" width="500" height="300" style="border-radius: 10px;">
                    </div>
                </div>
            </div>
            

            <div class="mt-lg-5">
                <div class="mt-4">
                    <div class="img-responsive">
                        <img src="../image/farmcat/10.jpg" width="500" height="300" style="border-radius: 10px;">
                    </div>
                </div>
            </div>

            <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <div class="mt-4">
                        <h1><b>American Curl</b></h1>
                        <br>
                        <hr class="blue-line">
                        <div class="mt-4">
                            <h5>American Curls are bright friendly sociable</h5>
                            <h5>and non-aggressive so they tend to be loved by</h5>
                            <h5>children and all the elderly. Including having a smart</h5>
                            <h5>and playful personality, it has become another nickname</h5>
                            <h5>for the American Curl, which is "Peter Pan".</h5>
                            <div class="mt-5"><h4 style="color: #1151c0;"><a href="american_curl.php">Let's see American Curl</a></h4></div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-lg-5">
                <div class="mt-4">
                    <div class="mt-4">
                        <h1><b>Munchkin</b></h1>
                        <br>
                        <hr class="blue-line">
                        <div class="mt-4">
                            <h5>The hottest short-legged cat that gathers all the highlights</h5>
                            <h5>of famous cat breeds into one. Whether it's the folded</h5>
                            <h5>ears of the Scottish Fold beautiful patterns like Like</h5>
                            <h5>the American Shorthair, and some have long fur</h5>
                            <h5>a Persian cat as well.</h5>
                            <div class="mt-5"><h4 style="color: #1151c0;"><a href="munchkin.php">Let's see Munchkin </a></h4></div>  
                        </div>
                    </div>
                </div>
             </div>

             <div class="mt-lg-5 ml-lg-5 ">
                <div class="mt-4 ml-5">
                    <div class="img-responsive">
                    <img src="../image/farmcat/11.jpg" width="500" height="300" style="border-radius: 10px;">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mt-5">
        <div class="custom-rectangle">
            <div class="box-green">
                <div id="bold-text">
                    Farm Policy
                </div>
            </div>
            <div class="text-p">
                <p>Cat City wants customers to be confident that the cats they purchase will be of good quality and health.</p>
                
            </div>
            <div class="text-p">
                <P>Because our cats are both imported cats and because they are self-bred they are quite expensive.</P>
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