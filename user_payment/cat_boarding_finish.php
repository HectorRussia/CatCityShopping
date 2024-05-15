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
<?php

    boarding_service();

?>