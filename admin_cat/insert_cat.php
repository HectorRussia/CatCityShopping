<?php

    include("../server-login/database.php");
    if(isset($_POST['insert_cat']))
    {
        //form name html
       $type_cats=$_POST['type_cat'];
       $title_cat=$_POST['title_cat'];
       $born_cat=$_POST['born_cat'];
       $price_cat=$_POST['price_cat'];
       $gender_cat=$_POST['gender_cat'];

       //accessing images
       $cat_image1=$_FILES['cat_image1']['name'];
       $cat_image2=$_FILES['cat_image2']['name'];
       $cat_image3=$_FILES['cat_image3']['name'];

       //accesing image tmp name
       $temp_image1=$_FILES['cat_image1']['tmp_name'];
       $temp_image2=$_FILES['cat_image2']['tmp_name'];
       $temp_image3=$_FILES['cat_image3']['tmp_name'];

       //checking empty condition
       if($type_cats==''or
         $title_cat==''or
         $born_cat==''or
         $price_cat==''or
         $gender_cat==''or
         $cat_image1==''or
         $cat_image2==''or
         $cat_image3==''or
         $temp_image1==''or
         $temp_image2==''or
         $temp_image3=='')
         {
            echo "<script>alert('please fill all the avialable')</script>";
         }
         elseif( !(strlen($title_cat)>=23 or strlen($title_cat) <= 57))
         {
            echo "<script>alert('Please fill title cat with a length between 23 and 57 characters')</script>";
         }
         else
         {
            //move after upload to the folder cat_images
            //route don't forget /
            move_uploaded_file($temp_image1,"./cat_images/$cat_image1");
            move_uploaded_file($temp_image2,"./cat_images/$cat_image2");
            move_uploaded_file($temp_image3,"./cat_images/$cat_image3");
            
            $insert_query = "INSERT INTO add_cat (type_cat, title_cat, born_cat, price_cat, gender_cat, image1, image2, image3, date) 
            VALUES ('$type_cats', '$title_cat', '$born_cat', '$price_cat', '$gender_cat', '$cat_image1', '$cat_image2', '$cat_image3', NOW())";

            $result_query = mysqli_query($mysqli, $insert_query);

            if ($result_query) 
            {
                echo "<script>alert('add info cat successfully')</script>";
            } 
            else 
            {
                echo "<script>alert('Error: " . mysqli_error($mysqli) . "')</script>"; // show if error
            }

        }

    }

?>

<h2 class="text-center">Insert information of Cat</h2>
<div class="container mt-3">
        <!--form-->
        <!--จะอัพโหลดภาพต้องมี enctype="multipart/form-data" -->
        <form action="" method="post" enctype="multipart/form-data">
            <!--type_cat-->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="description" class="form-label">Select type cat</label>
            <select name="type_cat" id="type_cat" 
            class="form-select">
                <?php
                    $select_query="Select * from `type_cat`";
                    $result_query=mysqli_query($mysqli,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        //type_cats,type_id form database
                        $type_cats=$row['type_cats'];
                        $type_id=$row['type_id'];
                        echo "<option value='$type_id'>$type_cats</option>";
                    }
                ?>
            </select>
            </div>

             <!--title_cat-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Title_cat</label>
                <input type="text" name="title_cat" id="title_cat" class="form-control" placeholder="Enter title_cat" autocomplete="off" required="required">
            </div>

             <!--born_cat-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="born_cat" class="form-label">Born_cat</label>
                <input type="text" name="born_cat" id="born_cat" class="form-control" placeholder="Enter born_cat" autocomplete="off" required="required">
            </div>

             <!--price_cat-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="price_cat" class="form-label">Price_cat</label>
                <input type="text" name="price_cat" id="price_cat" class="form-control" placeholder="price_cat unit dollar" autocomplete="off" required="required">
            </div>

             <!--Gender_cat-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="gender_cat" class="form-label">Gender_cat</label>
                <input type="text" name="gender_cat" id="gender_cat" class="form-control" placeholder="Enter Gender cat " autocomplete="off" required="required">
            </div>

             <!--Image 1-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_image1" class="form-label">Cat image1</label>
                <input type="file" name="cat_image1" id="cat_image1" class="form-control" 
                required="required">
            </div>

            <!--Image 2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_image2" class="form-label">Cat image2</label>
                <input type="file" name="cat_image2" id="cat_image2" class="form-control" 
                required="required">
            </div>

            <!--Image 3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_image3" class="form-label">Cat image3</label>
                <input type="file" name="cat_image3" id="cat_image3" class="form-control" 
                required="required">
            </div>


            <!--button-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_cat" class="btn btn-info mb-3 px-3"
                value="Insert cat">
            </div>

        </form>
    </div>
    