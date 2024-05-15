<?php
    include("../server-login/database.php");
    //name of after send form input
    if(isset($_POST['insert_type_product']))
    {
        //name=type_product
        $type_product=$_POST['type_product'];
        //$mysqli = require "server-login/database.php";
        //select data form database
        //protect insert repeat
        $select_query = "SELECT * FROM type_product WHERE type_products = '$type_product'";
        $result_select=mysqli_query($mysqli,$select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0)
        {
            echo "<script>alert('this type product is present inside the database')</script>";
           

        }
        else
        {
            $insert_query="INSERT INTO type_product (type_products) value('$type_product')";
            $result=mysqli_query($mysqli,$insert_query);
            echo $result;
            if($result)
            {
                echo "<script>alert(' type product has been inserted successfully')</script>";
                //echo '<script>window.location.href = "index.php";</script>'; // Redirect to a new page after inserting.
            }

        }
    }
?>

<h2 class="text-center">add type product</h2>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" 
        class="form-control" 
        name="type_product" 
        placeholder="Insert type_product" 
        aria-label="type_Product" 
        aria-describedby="basic-addon1"
        required>
    
    </div>

    <div class="input-group w-10 mb-2 m-auto">
            <input type="submit" class="bg-info border-0 p-2 my-3" 
            name="insert_type_product" 
            value="Insert_type_product">
    </div>
</form>