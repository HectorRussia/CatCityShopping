<?php

    $is_invalid=false;

    //ตรวจสอบว่าคำขอที่ส่งมายังเว็บเซิร์ฟเวอร์นี้เป็นแบบ "POST" หรือไม่ 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $mysqli=require __DIR__."/server-login/database.php";

        $sql=sprintf("SELECT * FROM user_login 
                      WHERE email='%s'",
                      $mysqli->real_escape_string($_POST["email"])); //real_escape_string protect sql injection
    
        $result=$mysqli->query($sql); //$result=mysqli_query($mysqli,$sql)

        $user=$result->fetch_assoc(); //$user=mysqli_fetch_assoc($result);

        if($user)
        {
            if(password_verify($_POST["password"],$user["password_hash"]))
            {
                session_start();

                //increase security
                session_regenerate_id();

                $_SESSION["user_id"]=$user["id"];

                header("Location: home/index.php");
                exit;
            }
        }
        $is_invalid=true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="css-img.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--js-bootstarp-->
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
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
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fade-in2">
            <div class="container">
                <a class="navbar-brand" href="index.html"><h1><img src="image/cat.jpg" style="width: 150pt; height: 150pt;" ><b> Cat city</b></h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark " aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="login.php">Login</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-3 fade-in">
            <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6 text-black">

                <div class="form-login">

                    <h2 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h2>

                    <?php if($is_invalid):?>
                        <em><span style="color: red;">Invalid login</span></em>
                    <?php endif;?>

                    <form style="width: 23rem;"  method="POST">

                        <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" value="<?=htmlspecialchars($_POST["email"]??"")?>" class="form-control form-control-lg" placeholder="Email address"/> 
                        </div>

                        <div class="form-outline mb-4">
                        <input type="password"  id="password" name="password" class="form-control form-control-lg" placeholder="password" />
                        </div>

                        <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block">Login</button>
                        </div>
                    </form>
                    <p>Don't have an account? <a href="registor.html" class="link-info">Register here</a></p>
                
                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="image/login/4.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            </div>
        </div>
            </section>
    </div>
</body>
</html>