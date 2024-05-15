<?php

    //ก็คือตอนเราลงทะเบียนเราอยากให้มันสวยๆแบบว่าถ้าเมลอยู่ใช้ไปแล้ว
    //มันจะไม่ไปหน้า email already taken แต่จะขึ้นตัวแดงๆ
    //ในหน้าที่เราลงทะเบียนแทน เอาไป combo กับ validation.js
    //ไอ้ตรงpromise

    $mysqli=require __DIR__."/server-login/database.php";

    $sql =sprintf("SELECT * FROM user_login WHERE email ='%s' ",
    $mysqli->real_escape_string($_GET['email']));

    $result=$mysqli->query($sql);

    $is_available=$result->num_rows === 0;

    header("Content-Type: application/json");

    echo json_encode(["available"=>$is_available]);

?>