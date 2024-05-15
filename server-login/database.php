<?php

    $host="localhost";
    $dbname="cat_city";
    $username="root";
    $password="";

    $mysqli=new mysqli(hostname:$host,
                       username:$username,
                       password:$password,
                       database:$dbname);
    if($mysqli->connect_error)
    {
        die("connection error".$mysqli->connect_error);
    }

    return $mysqli;
?>