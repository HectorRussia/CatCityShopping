<?php
    include('../function.php/function_common.php');

    if(empty($_POST['username']))
    {
        die("Name is required");
    }

    if(empty($_POST['user_surname']))
    {
        die("surname is required");
    }

    if(! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        die("Valid email is required");
    }

    if(strlen($_POST['password'])<8)
    {
        die("Password must be at least 8 characters");
    }

    if(! preg_match("/[a-z]/i",$_POST["password"]))
    {
        die("Password must contain or least one letter");
    }

    if(! preg_match("/[0-9]/",$_POST["password"]))
    {
        die("Password must contain or least one number");
    }

    if($_POST["password"] !== $_POST["Repeat"])
    {
        die("Passwords must match");
    }

    //hash password

    $password_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);

    $user_ip=getIPaddress();

    //ลืมใส่ / หลังจาก __DIR__ เพื่อเชื่อมต่อกับไดเรกทอรีปัจจุบันและไฟล์ database.php 
    $mysqli = require __DIR__ ."/database.php";

    $sql="INSERT INTO user_login (username,user_surname,email,password_hash,user_address,user_contact,user_ip) VALUES (?,?,?,?,?,?,?)";

    //Protect sql injection Prepared Statements 

    $stm=$mysqli->stmt_init();
    
    if(! $stm->prepare($sql))
    {
        die("SQL error :".$mysqli->error);
    }

    //sss=4 string (username,email,password_hash,user_address,user_contact,user_ip)

    $stm->bind_param("sssssss",$_POST["username"],$_POST["user_surname"],$_POST["email"],$password_hash,$_POST["user_address"],$_POST["user_contact"],$user_ip);

    if($stm->execute())
    {
        header("Location: ../registor-success.html");
    }
    else
    {
        //1065 in sql Duplicate entry email must setting unique
        if($mysqli->errno===1062)
        {
            echo "this Email already taken";
        }
        else
        {
            die($mysqli->error."">$mysqli->errno);
        }
    }
?>