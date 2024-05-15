<?php

    include("../server-login/database.php");
    if(isset($_POST['insert_product']))
    {
        //form name html
       $product_name=$_POST['product_name'];	
       $product_title=$_POST['product_title'];	
       $product_type=$_POST['product_type'];	
       $product_price=$_POST['product_price'];	
       $product_stock=$_POST['stock'];	
    
       //accessing images
       $product_image1=$_FILES['product_image1']['name'];
       $product_image2=$_FILES['product_image2']['name'];
       $product_image3=$_FILES['product_image3']['name'];

       //accesing image tmp name
       $temp_image1=$_FILES['product_image1']['tmp_name'];
       $temp_image2=$_FILES['product_image2']['tmp_name'];
       $temp_image3=$_FILES['product_image3']['tmp_name'];

       //checking empty condition
       if($product_name==''or
         $product_title==''or
         $product_type==''or
         $product_price==''or
         $product_stock==''or
         $product_image1==''or
         $product_image2==''or
         $product_image3==''or  
         $temp_image1==''or
         $temp_image2==''or
         $temp_image3=='')
         {
            echo "<script>alert('please fill all the avialable')</script>";
         }
         
         elseif(!(strlen($product_title) >= 23 or strlen($product_title) <= 57)) 
         {
             echo "<script>alert('Please fill product title with a length between 23 and 57 characters')</script>";
             return;
         }
         
         else
         {
            //move after upload to the folder cat_images
            //route don't forget /
            move_uploaded_file($temp_image1,"./product_images/$product_image1");
            move_uploaded_file($temp_image2,"./product_images/$product_image2");
            move_uploaded_file($temp_image3,"./product_images/$product_image3");
            
            $insert_query = "INSERT INTO add_products (product_name, product_title, product_type, product_price,stock, product_image1, product_image2, product_image3, date) 
            VALUES ('$product_name', '$product_title', '$product_type', '$product_price', '$product_stock', '$product_image1', '$product_image2', '$product_image3', NOW())";

            $result_query = mysqli_query($mysqli, $insert_query);

            if ($result_query) 
            {
                echo "<script>alert('add info product successfully')</script>";
            } 
            else 
            {
                echo "<script>alert('Error: " . mysqli_error($mysqli) . "')</script>"; // show if error
            }

        }

    }

?>

<h2 class="text-center">Insert information of product</h2>
<div class="container mt-3">
        <!--form-->
        <!--จะอัพโหลดภาพต้องมี enctype="multipart/form-data" -->
        <form action="" method="post" enctype="multipart/form-data">
            <!--product_name-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product_name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product name" autocomplete="off" required="required">
            </div>

            <!--Product_title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="born_cat" class="form-label">Product_title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required="required">
            </div>

            <!--product_type-->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="description" class="form-label">Select type product</label>
            <select name="product_type" id="product_type" 
            class="form-select">
                <?php
                    $select_query="Select * from `type_product`";
                    $result_query=mysqli_query($mysqli,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        //type_cats,type_id form database
                        $product_type=$row['type_products'];
                        $product_id=$row['product_id'];
                        echo "<option value='$product_id'>$product_type</option>";
                    }
                ?>
            </select>
            </div>
            
            <!--product_price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product_price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product_price unit dollar such 14.00 or 15.30 " autocomplete="off" required="required">
            </div>
        	
            <!--product_price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="stock" class="form-label">Product_stock</label>
                <input type="text" name="stock" id="stock" class="form-control" placeholder="Enter Product stock" autocomplete="off" required="required">
            </div>

             <!--product_image1-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_image1" class="form-label">Product_image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" 
                required="required">
            </div>

            <!--product_image2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product_image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" 
                >
            </div>

            <!--product_image3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product_image3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" 
                >
            </div>


            <!--button-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3"
                value="Insert product">
            </div>

        </form>
    </div>
    