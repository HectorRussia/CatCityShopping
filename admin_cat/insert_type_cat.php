<?php
    include("../server-login/database.php");
    //name of after send form input
    if(isset($_POST['insert_type_cat']))
    {
        //name=type_cat
        $type_cat=$_POST['type_cat'];
        //$mysqli = require "server-login/database.php";
        //select data form database
        //protect insert repeat
        $select_query = "SELECT * FROM type_cat WHERE type_cats = '$type_cat'";
        $result_select=mysqli_query($mysqli,$select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0)
        {
            echo "<script>alert('this type cat is present inside the database')</script>";
        }
        else
        {
            $insert_query="INSERT INTO type_cat (type_cats) value('$type_cat')";
            $result=mysqli_query($mysqli,$insert_query);
            echo $result;
            if($result)
            {
                echo "<script>alert(' type_cat has been inserted successfully')</script>";
                //echo '<script>window.location.href = "index.php";</script>'; // Redirect to a new page after inserting.
            }

        }
    }
?>

<h2 class="text-center">Insert type cat</h2>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" 
        class="form-control" 
        name="type_cat" 
        placeholder="Insert type_cat" 
        aria-label="type_CATS" 
        aria-describedby="basic-addon1"
        required>
    
    </div>

    <div class="input-group w-10 mb-2 m-auto">
            <input type="submit" class="bg-info border-0 p-2 my-3" 
            name="insert_type_cat" 
            value="Insert_type_cat">
    </div>
</form>