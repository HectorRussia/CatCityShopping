<?php

    //including connect DB
    include('../server-login/database.php');

    //////part cat //////
    function showscottish()
    {
        global $mysqli;

        $select_query = "SELECT * FROM add_cat WHERE type_cat = ? ";

        if ($stmt = $mysqli->prepare($select_query))
        {
            $type_cat = 1; // ระบุค่าของ type_cat ที่คุณต้องการค้นหา
            $stmt->bind_param("i", $type_cat); // "i" คือ data type ของ type_cat (integer) อันนี้ไม่ใช้ชนิดใน databaseนะ

            if ($stmt->execute())
            {
                $result_query = $stmt->get_result(); // ใช้ get_result() เพื่อรับผลลัพธ์

                while ($row = mysqli_fetch_assoc($result_query))
                //Procedural:
                //$row = mysqli_fetch_assoc($result_query);
                //Object-Oriented:
                //$row = $result_query->fetch_assoc();
    
                {
                    $id_cat=htmlentities($row['id_cat']);
                    $title_cat = htmlentities($row['title_cat']);
                    $born_cat = htmlentities($row['born_cat']);
                    $price_cat = htmlentities($row['price_cat']);
                    $gender_cat = htmlentities($row['gender_cat']);
                    $cat_image1 = htmlentities($row['image1']);

                    echo "               
                        <div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                            <img src='../admin_cat/cat_images/$cat_image1' alt='Scottish Cat' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <h5 class='card-title'>Scottish Cat</h5>
                                    <p class='card-text '>Description: $title_cat</p>
                                    <p class='card-text '>Born: $born_cat</p>
                                    <p class='card-text '>Gender: $gender_cat</p>
                                    <p class='card-text '>Price: $price_cat $</p>
                                    <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                    <a href='../function.php/bf_checkout_cat.php?buy_cat=$id_cat' class='btn btn-primary mt-1'>Add to Your Family</a>
                                </div>
                            </div>
                        </div>
                    ";
                }

                $stmt->close();
            }
        }
        else 
        {
            echo "Error: " . $mysqli->error;
        }

    }



    //show british
    function showbritish()
    {
        global $mysqli;

        $select_query = "SELECT * FROM add_cat WHERE type_cat= ? ";
        
        if($stmt=$mysqli->prepare($select_query))
        {    
            $type_cat=2;
            $stmt->bind_param("i",$type_cat);
            
            if($stmt->execute())
            {
                $result_query=$stmt->get_result();
    
                while($row = $result_query->fetch_assoc())
                {
                    $id_cat=htmlentities($row['id_cat']);
                    $title_cat=htmlentities($row['title_cat']);
                    $born_cat=htmlentities($row['born_cat']);
                    $price_cat=htmlentities($row['price_cat']);
                    $gender_cat=htmlentities($row['gender_cat']);
                    $cat_image1=htmlentities($row['image1']);

                    echo "
                        <div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                            <img src='../admin_cat/cat_images/$cat_image1' alt='Scottish Cat' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <h5 class='card-title'>British</h5>
                                    <p class='card-text'>Description: $title_cat</p>
                                    <p class='card-text'>Born: $born_cat</p>
                                    <p class='card-text'>Gender: $gender_cat</p>
                                    <p class='card-text'>Price: $price_cat $</p>
                                    <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                    <a href='../function.php/bf_checkout_cat.php?buy_cat=$id_cat' class='btn btn-primary mt-1'>Add to Your Family</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            }
            $stmt->close();
        }
        else 
        {
            echo "Error: " . $mysqli->error;
        }
    }

     //show british
     function showPersian()
     {
         global $mysqli;
 
         $select_query = "SELECT * FROM add_cat WHERE type_cat= ? ";
         
         if($stmt=$mysqli->prepare($select_query))
         {    
             $type_cat=3;
             $stmt->bind_param("i",$type_cat);
             
             if($stmt->execute())
             {
                 $result_query=$stmt->get_result();
     
                 while($row = $result_query->fetch_assoc())
                 {
                     $id_cat=htmlentities($row['id_cat']);
                     $title_cat=htmlentities($row['title_cat']);
                     $born_cat=htmlentities($row['born_cat']);
                     $price_cat=htmlentities($row['price_cat']);
                     $gender_cat=htmlentities($row['gender_cat']);
                     $cat_image1=htmlentities($row['image1']);
 
                     echo "
                         <div class='col mt-3'>
                             <div class='card' style='width: 18rem;'>
                             <img src='../admin_cat/cat_images/$cat_image1' alt='Scottish Cat' class='card-img-top'>
                                 <div class='card-body' style='background-color:gainsboro ;'>
                                     <h5 class='card-title'>Persian</h5>
                                     <p class='card-text'>Description: $title_cat</p>
                                     <p class='card-text'>Born: $born_cat</p>
                                     <p class='card-text'>Gender: $gender_cat</p>
                                     <p class='card-text'>Price: $price_cat $</p>
                                     <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                     <a href='../function.php/bf_checkout_cat.php?buy_cat=$id_cat' class='btn btn-primary mt-1'>Add to Your Family</a>
                                 </div>
                             </div>
                         </div>
                     ";
                 }
             }
             $stmt->close();
         }
         else 
         {
             echo "Error: " . $mysqli->error;
         }
     }

    
    function showRagdoll()
    {
        global $mysqli;

        $select_query = "SELECT * FROM add_cat WHERE type_cat= ? ";
        
        if($stmt=$mysqli->prepare($select_query))
        {    
            $type_cat=4;
            $stmt->bind_param("i",$type_cat);
            
            if($stmt->execute())
            {
                $result_query=$stmt->get_result();
    
                while($row = $result_query->fetch_assoc())
                {
                    $id_cat=htmlentities($row['id_cat']);
                    $title_cat=htmlentities($row['title_cat']);
                    $born_cat=htmlentities($row['born_cat']);
                    $price_cat=htmlentities($row['price_cat']);
                    $gender_cat=htmlentities($row['gender_cat']);
                    $cat_image1=htmlentities($row['image1']);

                    echo "
                        <div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                            <img src='../admin_cat/cat_images/$cat_image1' alt='Scottish Cat' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <h5 class='card-title'>Ragdoll</h5>
                                    <p class='card-text'>Description: $title_cat</p>
                                    <p class='card-text'>Born: $born_cat</p>
                                    <p class='card-text'>Gender: $gender_cat</p>
                                    <p class='card-text'>Price: $price_cat $</p>
                                    <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                    <a href='../function.php/bf_checkout_cat.php?buy_cat=$id_cat' class='btn btn-primary mt-1'>Add to Your Family</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            }
            $stmt->close();
        }
        else 
        {
            echo "Error: " . $mysqli->error;
        }
    }

     //show british
     function showAmericanCurl()
     {
         global $mysqli;
 
         $select_query = "SELECT * FROM add_cat WHERE type_cat= ? ";
         
         if($stmt=$mysqli->prepare($select_query))
         {    
             $type_cat=5;
             $stmt->bind_param("i",$type_cat);
             
             if($stmt->execute())
             {
                 $result_query=$stmt->get_result();
     
                 while($row = $result_query->fetch_assoc())
                 {
                     $id_cat=htmlentities($row['id_cat']);
                     $title_cat=htmlentities($row['title_cat']);
                     $born_cat=htmlentities($row['born_cat']);
                     $price_cat=htmlentities($row['price_cat']);
                     $gender_cat=htmlentities($row['gender_cat']);
                     $cat_image1=htmlentities($row['image1']);
 
                     echo "
                         <div class='col mt-3'>
                             <div class='card' style='width: 18rem;'>
                             <img src='../admin_cat/cat_images/$cat_image1' alt='Scottish Cat' class='card-img-top'>
                                 <div class='card-body' style='background-color:gainsboro ;'>
                                     <h5 class='card-title'>AmericanCurl</h5>
                                     <p class='card-text'>Description: $title_cat</p>
                                     <p class='card-text'>Born: $born_cat</p>
                                     <p class='card-text'>Gender: $gender_cat</p>
                                     <p class='card-text'>Price: $price_cat $</p>
                                     <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                     <a href='../function.php/bf_checkout_cat.php?buy_cat=$id_cat' class='btn btn-primary mt-1'>Add to Your Family</a>
                                 </div>
                             </div>
                         </div>
                     ";
                 }
             }
             $stmt->close();
         }
         else 
         {
             echo "Error: " . $mysqli->error;
         }
     }

      //show british
    function showMunchkin()
    {
        global $mysqli;

        $select_query = "SELECT * FROM add_cat WHERE type_cat= ? ";
        
        if($stmt=$mysqli->prepare($select_query))
        {    
            $type_cat=6;
            $stmt->bind_param("i",$type_cat);
            
            if($stmt->execute())
            {
                $result_query=$stmt->get_result();
    
                while($row = $result_query->fetch_assoc())
                {
                    $id_cat=htmlentities($row['id_cat']);
                    $title_cat=htmlentities($row['title_cat']);
                    $born_cat=htmlentities($row['born_cat']);
                    $price_cat=htmlentities($row['price_cat']);
                    $gender_cat=htmlentities($row['gender_cat']);
                    $cat_image1=htmlentities($row['image1']);

                    echo "
                        <div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                            <img src='../admin_cat/cat_images/$cat_image1' alt='Scottish Cat' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <h5 class='card-title'>Munchkin</h5>
                                    <p class='card-text'>Description: $title_cat</p>
                                    <p class='card-text'>Born: $born_cat</p>
                                    <p class='card-text'>Gender: $gender_cat</p>
                                    <p class='card-text'>Price: $price_cat $</p>
                                    <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                    <a href='../function.php/bf_checkout_cat.php?buy_cat=$id_cat' class='btn btn-primary mt-1'>Add to Your Family</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            }
            $stmt->close();
        }
        else 
        {
            echo "Error: " . $mysqli->error;
        }
    }

    function show_detail_cat()
    {
        global $mysqli;

        if (isset($_GET['cat_detail'])) {
            $id_cat = $_GET['cat_detail'];
            $select_cat = "SELECT * FROM add_cat WHERE id_cat='$id_cat'";
            $result_cat = mysqli_query($mysqli, $select_cat);

            if ($result_cat) 
            {
                // ตรวจสอบว่า $row_cat ไม่เป็น null ก่อนที่จะใช้งาน
                while($row_cat=mysqli_fetch_assoc($result_cat))
                {
                    $id_cat = htmlentities($row_cat['id_cat']);
                    $title_cat = htmlentities($row_cat['title_cat']);
                    $born_cat = htmlentities($row_cat['born_cat']);
                    $price_cat = htmlentities($row_cat['price_cat']);
                    $gender_cat = htmlentities($row_cat['gender_cat']);
                    $cat_image1 = htmlentities($row_cat['image1']);
                    $cat_image2 = htmlentities($row_cat['image2']);
                    $cat_image3 = htmlentities($row_cat['image3']);

                    echo "
                        <div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                                <img src='../admin_cat/cat_images/$cat_image1' alt='All product' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <p class='card-text'>Description: $title_cat</p>
                                    <p class='card-text'>Born: $born_cat</p>
                                    <p class='card-text'>Gender: $gender_cat</p>
                                    <p class='card-text'>Price: $price_cat$</p>
                                    <a href='cat_detail.php?cat_detail=$id_cat' class='btn btn-info'>Watch detail</a>
                                    <a href='#' class='btn btn-primary mt-1'>Add to Your Family</a>
                                </div>
                            </div>
                        </div>

                        <div class='col-md-8'>
                            <!--related images-->
                            <div class='row'>
                                <div class='col-md-6'>
                                    <img src='../admin_cat/cat_images/$cat_image2' alt='Related Image 1' class='card-img-top'>
                                </div>
                                <div class='col-md-6'>
                                    <img src='../admin_cat/cat_images/$cat_image3' alt='Related Image 2' class='card-img-top'>
                                </div>
                            </div>
                        </div>
                    ";
                }
            } 
            else
            {
                echo "ไม่พบข้อมูลที่ระบุ";
            }
        }
    }

    function preorder_invoice() 
    {
        global $mysqli;
        $user_id = getUserId();
        $select_invoice = "SELECT DISTINCT invoice_cat FROM `preorder_cat` WHERE user_id = ? ORDER BY order_date DESC";
        $stmt_invoice = mysqli_prepare($mysqli, $select_invoice);
        mysqli_stmt_bind_param($stmt_invoice, "i", $user_id);
        mysqli_stmt_execute($stmt_invoice);
        $result_invoice = mysqli_stmt_get_result($stmt_invoice);
        $invoice_cat = mysqli_fetch_assoc($result_invoice);
        return $invoice_cat['invoice_cat'];
    }

    
    function showInfoOrderCat()
    {
        global $mysqli;
        $user_id=getUserId();
        $invoice_cat=preorder_invoice();
        $select_order_cat="SELECT DISTINCT * FROM `cat_orders` WHERE user_id= '$user_id' AND invoice_cat='$invoice_cat' ORDER BY order_date DESC";
        $result_order_cat=mysqli_query($mysqli,$select_order_cat);
        
        while ( $row_order_cat = mysqli_fetch_array($result_order_cat)) 
        {
            $id_cat = $row_order_cat['id_cat'];
            
            // ดึงข้อมูล cat add_cat โดยใช้ id_cat ที่ได้จาก cat_orders
            $select_cat_name = "SELECT DISTINCT * FROM `add_cat` WHERE id_cat ='$id_cat'";
            $result_cat_name = mysqli_query($mysqli, $select_cat_name);
    
            $total_price_cat = $row_order_cat['Total_price'];
            $invoice_cat=$row_order_cat['invoice_cat'];

            while ($list_cat_name = mysqli_fetch_array($result_cat_name)) 
            {
                $type_cats=$list_cat_name['type_cat'];

                $select_type="SELECT type_cats FROM `type_cat` WHERE type_id=$type_cats";
                $result_type=mysqli_query($mysqli,$select_type);
                $row_type=mysqli_fetch_assoc($result_type);

                $type_cat=htmlentities($row_type['type_cats']);

                //$type_cat=htmlentities($list_cat_name['type_cat']);
                $title_cat = htmlentities($list_cat_name['title_cat']);
                $born_cat = htmlentities($list_cat_name['born_cat']);
                $price_cat = htmlentities($list_cat_name['price_cat']);
                $gender_cat = htmlentities($list_cat_name['gender_cat']);
                $cat_image1 = htmlentities($list_cat_name['image1']);

                echo "
                    <div class='form-outline mb-4 w-50 m-auto'>

                        <p>Type : $type_cat </p>
                   
                        <p>Born : $born_cat</p>
                   
                        <p>Gender : $gender_cat</p>

                        <p>invoice : $invoice_cat </p>
        
                        <p>Total :  $total_price_cat $</p>

                        <img src='../admin_cat/cat_images/$cat_image1' class='catcat'>
                    </div>
                ";
            }
        }

    }

     ////// END part cat //////


    ////// part product //////
    function show_all_product()
    {
        global $mysqli;
        
        if(!isset($_GET['product_id']))
        {
            //random หน่อย เวลา refresh จะได้สุ่มไปเรื่อยๆสวยดีดีกว่าโผล่มาแบบเดิมๆ rand()
            $select_query="SELECT * FROM add_products order by rand() LIMIT 0,9";
            
            $stmt=$mysqli->prepare($select_query);
            
            $stmt->execute();

            $result_query=$stmt->get_result();

            while($row=$result_query->fetch_assoc())
            {
                $product_id=htmlentities($row['product_id']);
                $product_name=htmlentities($row['product_name']);
                $product_title=htmlentities($row['product_title']);
                $product_type=htmlentities($row['product_type']);
                $product_price=htmlentities($row['product_price']);
                $product_stock=htmlentities($row['stock']);
                $product_image1=htmlentities($row['product_image1']);

                echo "
                    <div class='col mt-3'>
                        <div class='card' style='width: 18rem;'>
                        <img src='../admin_cat/product_images/$product_image1' alt='All product' class='card-img-top'>
                            <div class='card-body' style='background-color:gainsboro ;'>
                                <h5 class='card-title'>$product_name</h5>
                                <p class='card-text'>Description: $product_title</p>
                                <p class='card-text'>Price: $product_price $</p>
                                <p class='card-text'>stock: $product_stock <p>
                                <a href='product_detail.php?product_id=$product_id' class='btn btn-info'>Watch detail</a>
                                <a href='shoping.php?add_to_cart=$product_id' class='btn btn-primary mt-1'>Add to Your cart</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $stmt->close();
        }
    }

    function show_topic_shoping()
    {
        global $mysqli;
        
        if(isset($_GET['product_id']))
        {
            $product_id=$_GET['product_id'];
            $select_query="SELECT * FROM add_products WHERE product_type= ? ";
            
            $stmt=$mysqli->prepare($select_query);
        
            if($stmt)
            {
               
                $stmt->bind_param("i",$product_id);

                $stmt->execute();

                $result_query=$stmt->get_result();

                while($row=$result_query->fetch_assoc())
                {
                    $product_id=htmlentities($row['product_id']);
                    $product_name=htmlentities($row['product_name']);
                    $product_title=htmlentities($row['product_title']);
                    $product_type=htmlentities($row['product_type']);
                    $product_price=htmlentities($row['product_price']);
                    $product_stock=htmlentities($row['stock']);
                    $product_image1=htmlentities($row['product_image1']);
    
                    echo "
                        <div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                            <img src='../admin_cat/product_images/$product_image1' alt='All product' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <h5 class='card-title'>$product_name</h5>
                                    <p class='card-text'>Description: $product_title</p>
                                    <p class='card-text'>Price: $product_price $</p>
                                    <p class='card-text'>stock: $product_stock <p>
                                    <a href='product_detail.php?product_id=$product_id' class='btn btn-info'>Watch detail</a>
                                    <a href='shoping.php?add_to_cart=$product_id' class='btn btn-primary mt-1'>Add to Your cart</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
                $stmt->close();
            }
            else 
            {
                echo "Error: " . $mysqli->error;
            }
        }
    }

    function create_tabbar_shoping()
    {
        global $mysqli;
        $select_query="SELECT * FROM type_product";
        
        if($stmt=$mysqli->prepare($select_query))
        {
            $stmt->execute();
            
            $result_query=$stmt->get_result();

            while($row=$result_query->fetch_assoc())
            {
                $product_type=htmlentities($row['type_products']);
                $product_id=htmlentities($row['product_id']);
                echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='shoping.php?product_id=$product_id'>$product_type</a>
                    </li>
                ";
            }
            $stmt->close();
        }
        else
        {
            echo "Error: ".$mysqli->error;
        }
    }

    function search_product()
    {
        global $mysqli;
        if(isset($_GET['search_data_product']))
        {
            $seach_data_value=$_GET['search_data'];

            // แปลงคำค้นหาและคอลัมน์ที่จะค้นหาให้เป็นตัวเล็กด้วย LOWER
            //บางทีเราตั้งชื่อตัวใหญ่พอลูกค้าพิมตัวเล็กมันดันหาไม่เจออีก
            //ความโหดของอันนี้คือ พิมอะไรก็ได้ที่มันเกี่ยวข้องกันแต่ไม่จำเปนต้องตรงเปะยังไงก็หาเจอ
            $search_query = "SELECT * FROM add_products WHERE LOWER(product_name) LIKE ? ";
            
            $seach_term= "%".strtolower($seach_data_value)."%";

            $stmt=$mysqli->prepare($search_query);

            if($stmt)
            {
                $stmt->bind_param("s",$seach_term);
                $stmt->execute();

                $result_query=$stmt->get_result();
                $num_of_row=$result_query->num_rows;
                //เดิมทีมัน mysqli_num_rows();

                if($num_of_row==0)
                {
                    echo "<h2 class='text-center' text-danger>No products found on this store</h2>";
                }

                while($row=$result_query->fetch_assoc())
                {
                        $product_id=htmlentities($row['product_id']);
                        $product_name=htmlentities($row['product_name']);
                        $product_title=htmlentities($row['product_title']);
                        $product_type=htmlentities($row['product_type']);
                        $product_price=htmlentities($row['product_price']);
                        $product_stock=htmlentities($row['stock']);
                        $product_image1=htmlentities($row['product_image1']);

                        echo "
                            <div class='col mt-3'>
                                <div class='card' style='width: 18rem;'>
                                <img src='../admin_cat/product_images/$product_image1' alt='All product' class='card-img-top'>
                                    <div class='card-body' style='background-color:gainsboro ;'>
                                        <h5 class='card-title'>$product_name</h5>
                                        <p class='card-text'>Description: $product_title</p>
                                        <p class='card-text'>Price: $product_price $</p>
                                        <p class='card-text'>stock: $product_stock <p>
                                        <a href='product_detail.php?product_id=$product_id' class='btn btn-info'>Watch detail</a>
                                        <a href='shoping.php?add_to_cart=$product_id' class='btn btn-primary mt-1'>Add to Your cart</a>
                                    </div>
                                </div>
                            </div>
                        ";

                }
                $stmt->close();
            }
            else
            {
                echo "Error: ".$mysqli->error;
            }
        }
    }
    
    function product_detail()
    {
        global $mysqli;

        if(isset($_GET['product_id']))
        {
            $product_id=$_GET['product_id'];
            $select_query="SELECT * FROM add_products WHERE product_id=?";

            $stmt=$mysqli->prepare($select_query);

            if($stmt)
            {
                $stmt->bind_param("i",$product_id);
                $stmt->execute();

                $result_query=$stmt->get_result();
            

                while($row=$result_query->fetch_assoc())
                {
                    //htmlentities protect HTML injection (XSS) 
                    $product_id = htmlentities($row['product_id']);
                    $product_name = htmlentities($row['product_name']);
                    $product_title = htmlentities($row['product_title']);
                    $product_type = htmlentities($row['product_type']);
                    $product_price = htmlentities($row['product_price']);
                    $product_stock = htmlentities($row['stock']);
                    $product_image1 = htmlentities($row['product_image1']);
                    $product_image2 = htmlentities($row['product_image2']);
                    $product_image3 = htmlentities($row['product_image3']);

                    echo "<div class='col mt-3'>
                            <div class='card' style='width: 18rem;'>
                            <img src='../admin_cat/product_images/$product_image1' alt='All product' class='card-img-top'>
                                <div class='card-body' style='background-color:gainsboro ;'>
                                    <h5 class='card-title'>$product_name</h5>
                                    <p class='card-text'>Description: $product_title</p>
                                    <p class='card-text'>Price: $product_price $</p>
                                    <p class='card-text'>stock: $product_stock <p>
                                    <a href='product_detail.php?product_id=$product_id' class='btn btn-info'>Watch detail</a>
                                    <a href='shoping.php?add_to_cart=$product_id' class='btn btn-primary mt-1'>Add to Your cart</a>
                                </div>
                            </div>
                        </div>
                                
                        <div class='col-md-8'>
                            <!--realted images-->
                            <div class='row'>
                    
                                <div class='col-md-6'>
                                    <img src='../admin_cat/product_images/$product_image2' alt='$product_title' class='card-img-top'>
                                </div>

                                <div class='col-md-6'>
                                    <img src='../admin_cat/product_images/$product_image3' alt='$product_title' class='card-img-top'>
                                </div>

                            </div>
                        </div>
                    ";
                }
            }
            else
            {
                echo "Error".$mysqli->error;
            }
        }
    }

    function getIPAddress() 
    {
        // Check if the IP address is set and not empty
        if (isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR'])) 
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        } 
        else if (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) 
        {
            // Check if the IP address is set in the HTTP_CLIENT_IP header
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } 
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
        {
            // Check if the IP address is set in the HTTP_X_FORWARDED_FOR header
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 
        else {
            // If no IP address is found, return a default IP address or handle it as needed
            $ip = '0.0.0.0'; // You can change this to a default IP address or handle it differently
        }

        return $ip;  
        //IP ::1 คือ IPv6 address ที่ใช้แทน localhost หรือ loopback address 
        //ในระบบ IPv6 ซึ่งมีหน้าที่เหมือนกับ IPv4 address 127.0.0.1 ในระบบ IPv4 ซึ่งเป็นที่รู้จักกันในหมวดของ localhost.
    }

    function get_user_email() //ใช้อันนี้อย่าหาทำเอาipไปเป็นตัว database relational
    {
        global $mysqli;

        $sql="SELECT * FROM user_login WHERE id={$_SESSION["user_id"]}";
    
        $result=$mysqli->query($sql);

        $user=$result->fetch_assoc();

        //$result_user=$user['id'];
        $result_user=$user['email']; //ใช้อีเมลแทนเพราะไม่มีวันซ้ำกันหรือจะใช้ id_user ก็ดรั้ย
        
        return $result_user;
    }

    //buy_product and select quantity
    function add_to_cart()
    {
        if (isset($_GET['add_to_cart'])) 
        {
            global $mysqli;
            $get_ip_add = getIPAddress();
            $get_product_id = $_GET['add_to_cart'];

            $select_query = "SELECT * FROM `cart_details` WHERE ip_address=? AND product_id=?";
            $stmt = $mysqli->prepare($select_query);

            if ($stmt) 
            {
                $stmt->bind_param("si", $get_ip_add, $get_product_id);
                $stmt->execute();

                $result_query = $stmt->get_result();
                $num_of_row = $result_query->num_rows;

                if ($num_of_row > 0) //product repeat
                {
                    echo "<script>alert('This item is already present inside cart')</script>";
                    echo "<script>window.open('shoping.php','_self')</script>";
                } 
                else 
                {
                    $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES (?, ?, 1)";
                    $stmt = $mysqli->prepare($insert_query);

                    if ($stmt) 
                    {
                        $stmt->bind_param("is", $get_product_id, $get_ip_add);
                        $stmt->execute();

                        echo "<script>alert('Item is added to cart')</script>";
                        echo "<script>window.open('shoping.php','_self')</script>";
                    } 

                    else 
                    {
                        echo "Error: " . $mysqli->error;
                    }
                }
            }
            else 
            {
                echo "Error: " . $mysqli->error;
            }
        }
    } 

     //function remove
     // function remove
    function remove_cart_item()
    {
        global $mysqli;

        if (isset($_POST['remove_cart'])) 
        {
            if (!isset($_POST['removeitem']) || empty($_POST['removeitem'])) 
            {
                echo "<script>alert('Please select product for deletion')</script>";
                return;
            } 
            else 
            {
                foreach ($_POST['removeitem'] as $remove_id) 
                {
                    $delete_query = "DELETE FROM `cart_details` WHERE product_id='$remove_id'";
                    $run_delete = mysqli_query($mysqli, $delete_query);
                }
                if ($run_delete) 
                {
                    echo "<script>window.open('cart.php','_self')</script>";
                }
            }
        }
    }

     

     function increase_item()
     {
         global $mysqli;

         if (isset($_POST['product_id']) && isset($_POST['increase'])) 
         {
             $product_id = $_POST['product_id'];

             //prepared statement  
             $increase_item = "UPDATE cart_details SET quantity = quantity + 1 WHERE product_id = ?";
             
             if ($stmt = $mysqli->prepare($increase_item)) 
             {
                 $stmt->bind_param("i", $product_id);

                 if ($stmt->execute()) {
                     echo "<script>window.open('cart.php','_self')</script>";
                 } else {
                     // error execute prepared statement
                     echo "เกิดข้อผิดพลาดในการ execute prepared statement: " . $stmt->error;
                 }

                 $stmt->close();
             } 
             else 
             {
                 // error prepared statement
                 echo "เกิดข้อผิดพลาดในการเตรียม prepared statement: " . $mysqli->error;
             }
         }
     }

     

     function deincrease_item()
     {
         global $mysqli;

         if (isset($_POST['product_id']) && isset($_POST['decrease'])) 
         {
             $product_id = $_POST['product_id'];

             //  SQL injection
             $decrease_item = "UPDATE cart_details SET quantity = CASE WHEN quantity > 0 THEN quantity - 1 ELSE 0 END WHERE product_id = ?";
             
             if ($stmt = $mysqli->prepare($decrease_item)) 
             {
                 $stmt->bind_param("i", $product_id);

                 if ($stmt->execute()) 
                 {
                     echo "<script>window.open('cart.php','_self')</script>";
                 } 
                 else 
                 {
                     // เกิดข้อผิดพลาดในการ execute prepared statement
                     echo "เกิดข้อผิดพลาดในการ execute prepared statement: " . $stmt->error;
                 }

                 $stmt->close();
             } 
             else 
             {
                 // เกิดข้อผิดพลาดในการเตรียม prepared statement
                 echo "เกิดข้อผิดพลาดในการเตรียม prepared statement: " . $mysqli->error;
             }
         }
     }
     
     function getUserId() 
     {
        global $mysqli;
        $user_email = get_user_email(); 
        $get_user = "SELECT * FROM `user_login` WHERE email=?";
        $stmt_user = mysqli_prepare($mysqli, $get_user);
        mysqli_stmt_bind_param($stmt_user, "s", $user_email);
        mysqli_stmt_execute($stmt_user);
        $result = mysqli_stmt_get_result($stmt_user);
        $run_query = mysqli_fetch_array($result);
        return $run_query['id'];
    }
    
    // Function to get distinct invoice number
    function show_invoice_number() 
    {
        global $mysqli;
        $user_id = getUserId();
        $select_invoice = "SELECT DISTINCT invoice_number FROM `user_orders` WHERE user_id = ? ORDER BY order_date DESC";
        $stmt_invoice = mysqli_prepare($mysqli, $select_invoice);
        mysqli_stmt_bind_param($stmt_invoice, "i", $user_id);
        mysqli_stmt_execute($stmt_invoice);
        $result_invoice = mysqli_stmt_get_result($stmt_invoice);
        $resultic_invoice = mysqli_fetch_assoc($result_invoice);
        echo $resultic_invoice['invoice_number'];
    }
    
    // Function to get distinct amount due
    /*function show_amout_due() 
    {
        global $mysqli;
        $user_id = getUserId();
        $select_amount_due = "SELECT DISTINCT amount_due FROM `user_orders` WHERE user_id = ? ORDER BY order_date DESC";
        $stmt_amount_due = mysqli_prepare($mysqli, $select_amount_due);
        mysqli_stmt_bind_param($stmt_amount_due, "i", $user_id);
        mysqli_stmt_execute($stmt_amount_due);
        $result_amount_due = mysqli_stmt_get_result($stmt_amount_due);
        $resultic_amount_due = mysqli_fetch_assoc($result_amount_due);
        echo $resultic_amount_due['amount_due']." $";
    }*/

    function show_amout_due() //<!--แก้บัคพน ต้องใช้ where invoice ไม่ใช่ user_id-->
    {
        global $mysqli;
        $user_id=getUserId();
    
        $select_amount_due="SELECT DISTINCT amount_due FROM `user_orders` WHERE user_id = $user_id ORDER BY order_date DESC";
        $result=mysqli_query($mysqli,$select_amount_due);
        $resultic_amount_due=mysqli_fetch_assoc($result);
        $amount_due=$resultic_amount_due['amount_due'];
        echo $amount_due." $";
    }
    
    // Function to get distinct invoice number for list item
    function invoice_number_for_list_item() 
    {
        global $mysqli;
        $user_id = getUserId();
        $select_invoice = "SELECT DISTINCT invoice_number FROM `user_orders` WHERE user_id = ? ORDER BY order_date DESC";
        $stmt_invoice = mysqli_prepare($mysqli, $select_invoice);
        mysqli_stmt_bind_param($stmt_invoice, "i", $user_id);
        mysqli_stmt_execute($stmt_invoice);
        $result_invoice = mysqli_stmt_get_result($stmt_invoice);
        $resultic_invoice = mysqli_fetch_assoc($result_invoice);
        return $resultic_invoice['invoice_number'];
    }
    
    function list_item_on_payment() //ทำ prepared statement ด้วย
    {
        global $mysqli;
        $user_id = getUserId(); 
        $invoice_number=invoice_number_for_list_item(); 
        // ดึง product_id ที่ไม่ซ้ำกันจาก orders_pending ทั้งหมดที่เป็นของ user นั้น ๆ
        $select_product_id = "SELECT DISTINCT product_id, quantity FROM `orders_pending` 
        WHERE user_id = $user_id AND invoice_number=$invoice_number ORDER BY order_date DESC";

        $product_id_query = mysqli_query($mysqli, $select_product_id);

        while ($row = mysqli_fetch_array($product_id_query)) 
        {
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];

            // ดึงชื่อสินค้าจากตาราง add_products โดยใช้ product_id ที่ได้จาก orders_pending
            $select_product_name = "SELECT DISTINCT product_name, product_price FROM `add_products` WHERE product_id='$product_id'";
            $result_product_name = mysqli_query($mysqli, $select_product_name);

            while ($list_product_name = mysqli_fetch_array($result_product_name)) 
            {
                $product_name = $list_product_name['product_name'];
                $product_price = $list_product_name['product_price'];

                $price_of_item = number_format($product_price * $quantity, 2);

                echo "
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>$product_name ($quantity) </label>
                        <span class='price2'>$price_of_item</span>
                    </div>
                ";
            }
        }
    }
    
    
    /*
     function show_invoice_number() 
     {
         global $mysqli;
     
         $user_ip = getIPAddress();
         $get_user = "SELECT * FROM `user_login` WHERE user_ip = '$user_ip'";
         $result = mysqli_query($mysqli, $get_user);
         $run_query = mysqli_fetch_array($result);
         $user_id = $run_query['id'];
     
         $select_invoice = "SELECT DISTINCT invoice_number FROM `user_orders` WHERE user_id = $user_id ORDER BY order_date DESC";
         $result_invoice = mysqli_query($mysqli, $select_invoice);
     
         $resultic_invoice=mysqli_fetch_assoc($result_invoice);
         $invoice_number=$resultic_invoice['invoice_number'];
         echo $invoice_number;

         return $invoice_number;
     }
      
 
    function show_amout_due() //<!--แก้บัคพน ต้องใช้ where invoice ไม่ใช่ user_id-->
    {
        global $mysqli;
        $user_ip=getIPAddress();
        $get_user="Select * from `user_login` where user_ip='$user_ip'";
        $result=mysqli_query($mysqli,$get_user);
        $run_query=mysqli_fetch_array($result);
        $user_id=$run_query['id'];

        $select_amount_due="SELECT DISTINCT amount_due FROM `user_orders` WHERE user_id = $user_id ORDER BY order_date DESC";
        $result=mysqli_query($mysqli,$select_amount_due);
        $resultic_amount_due=mysqli_fetch_assoc($result);
        $amount_due=$resultic_amount_due['amount_due'];
        echo $amount_due." $";
    }
 
    function invoice_number_for_list_item() 
     {
         global $mysqli;
     
         $user_ip = getIPAddress();
         $get_user = "SELECT * FROM `user_login` WHERE user_ip = '$user_ip'";
         $result = mysqli_query($mysqli, $get_user);
         $run_query = mysqli_fetch_array($result);
         $user_id = $run_query['id'];
     
         $select_invoice = "SELECT DISTINCT invoice_number FROM `user_orders` WHERE user_id = $user_id ORDER BY order_date DESC";
         $result_invoice = mysqli_query($mysqli, $select_invoice);
     
         $resultic_invoice=mysqli_fetch_assoc($result_invoice);
         $invoice_number=$resultic_invoice['invoice_number'];

         return $invoice_number;
     }


    function list_item_on_payment() 
    {
        global $mysqli;
        $user_ip = getIPAddress();
        $get_user = "SELECT * FROM `user_login` WHERE user_ip = '$user_ip'";
        $result = mysqli_query($mysqli, $get_user);
        $run_query = mysqli_fetch_array($result);
        $user_id = $run_query['id'];

        $invoice_number=invoice_number_for_list_item(); 
        // ดึง product_id ที่ไม่ซ้ำกันจาก orders_pending ทั้งหมดที่เป็นของ user นั้น ๆ
        $select_product_id = "SELECT DISTINCT product_id, quantity FROM `orders_pending` 
        WHERE user_id = $user_id AND invoice_number=$invoice_number ORDER BY order_date DESC";

        $product_id_query = mysqli_query($mysqli, $select_product_id);

        while ($row = mysqli_fetch_array($product_id_query)) 
        {
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];

            // ดึงชื่อสินค้าจากตาราง add_products โดยใช้ product_id ที่ได้จาก orders_pending
            $select_product_name = "SELECT DISTINCT product_name, product_price FROM `add_products` WHERE product_id='$product_id'";
            $result_product_name = mysqli_query($mysqli, $select_product_name);

            while ($list_product_name = mysqli_fetch_array($result_product_name)) 
            {
                $product_name = $list_product_name['product_name'];
                $product_price = $list_product_name['product_price'];

                $price_of_item = number_format($product_price * $quantity, 2);

                echo "
                    <div class='form-outline mb-4 w-50 m-auto'>
                        <label for='user_name' class='form-label'>$product_name ($quantity) </label>
                        <span class='price2'>$price_of_item</span>
                    </div>
                ";
            }
        }
    }
*/

    // part user
    function select_user()
    {
        global $mysqli;
        $user_email = get_user_email();
        $select_user = "SELECT * FROM `user_login` WHERE email=?";
        $stmt = mysqli_prepare($mysqli, $select_user);
        mysqli_stmt_bind_param($stmt, "s", $user_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['username'];
        $user_surname = $row['user_surname'];
        $user_email = $row['email'];
        $user_address = $row['user_address'];
        $user_contact = $row['user_contact'];

        echo "
        <div class='bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded custom-width'>
            <h3 class='h2 text-white mb-0'>$user_name $user_surname</h3>
            <span class='text-primary'>Customer</span>
        </div>
        <ul class='list-unstyled mb-1-9'>
            <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Name:</span> $user_name</li>
            <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Surname:</span> $user_surname</li>
            <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Email:</span> $user_email</li>
            <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Address:</span> $user_address</li>
            <li class='display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Phone:</span> $user_contact</li>
        </ul>
        ";
        mysqli_stmt_close($stmt);
    }


    function Edit_user()
    {
        global $mysqli;
        $user_email = get_user_email();
        $select_user = "SELECT * FROM `user_login` WHERE email=?";
        
        $stmt = mysqli_prepare($mysqli, $select_user);
        mysqli_stmt_bind_param($stmt, "s", $user_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $user_id=$row['id'];
        $user_name = $row['username'];
        $user_surname = $row['user_surname'];
        $user_email = $row['email'];
        $user_address = $row['user_address'];
        $user_contact = $row['user_contact'];

        echo "
        <div class='bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded custom-width'>
            <h3 class='h2 text-white mb-0'>$user_name $user_surname</h3>
            <span class='text-primary'>Customer</span>
        </div>
        <form action='edit_user.php' method='post'>
            <ul class='list-unstyled mb-1-9'>
                <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Name: </span>
                <input type='text' name='user_name' class='form-control w-50' value='$user_name'></input></li>
                
                <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Surname: </span> 
                <input type='text' name='user_surname' class='form-control w-50' value='$user_surname'></input></li>
                
                <li class='mb-2 mb-xl-3 display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Address: </span> 
                <input type='text' name='user_address' class='form-control w-50' value='$user_address'></input></li>
            
                <li class='display-28'><span class='display-26 text-secondary me-2 font-weight-600'>Phone: </span> 
                <input type='text' name='user_contact' class='form-control w-50' value='$user_contact'></input></li>
                
                <div class='form-outline mb-4'>
                    <input type='hidden' name='user_id' value='$user_id'>
                    <input type='submit' name='update_user' class='btn btn-info mb-3 px-3 mt-4'
                    value='Update your profile'>
                </div>
            </ul>
        </form>
        ";
        mysqli_stmt_close($stmt);
    }
    
    function update_user()
    {
        global $mysqli;

        if (isset($_POST['update_user'])) 
        {
            $user_id = $_POST['user_id'];
            $user_name = $_POST['user_name'];
            $user_surname = $_POST['user_surname'];
            $user_address = $_POST['user_address'];
            $user_contact = $_POST['user_contact'];

            $update_user = "UPDATE user_login SET 
            username=?,
            user_surname=?,
            user_address=?,
            user_contact=? WHERE id = ?";
            
            $stmt = mysqli_prepare($mysqli, $update_user);
            mysqli_stmt_bind_param($stmt, "ssssi", $user_name, $user_surname, $user_address, $user_contact, $user_id);
            $result_update_user = mysqli_stmt_execute($stmt);

            if ($result_update_user) 
            {
                echo "<script>alert('update your profile success')</script>";
                echo "<script>window.open('../home/user_page.php','_self')</script>";
            } 
            else 
            {
                echo "<script>alert('can\'t update your profile')</script>";
                echo "<script>window.open('../home/user_page.php','_self')</script>";
            }

            mysqli_stmt_close($stmt);
        }
    }

    //part grooming
    
    function Reserve_grooming()
    {
        global $mysqli;
        $user_id = getUserId();
        $name_cat = $_POST['name_cat'];
        $detail_grooming = $_POST['detail_grooming'];
        $time_id = $_POST['time_id'];

        if (isset($_POST['Reserve_grooming'])) 
        {
            
            $select_time = "SELECT * FROM time_grooming WHERE Time_id=?";
            $stmt = $mysqli->prepare($select_time);
            $stmt->bind_param('i', $time_id);
            $stmt->execute();
            $result_time = $stmt->get_result();
            $row_time = $result_time->fetch_assoc();
            $Time_id = $row_time['Time_id'];
            $stmt->close();

            // Use prepared statement for the insert query
            $insert_reserve = "INSERT INTO user_grooming (Time_id, user_id, name_cat, detail_grooming, date) 
                VALUES (?, ?, ?, ?, NOW())";
            $stmt = $mysqli->prepare($insert_reserve);
            $stmt->bind_param('iiss', $Time_id, $user_id, $name_cat, $detail_grooming);
            $result_reserve = $stmt->execute();
            $stmt->close();

            if ($result_reserve) 
            {
                echo "<script>alert('Reserve grooming successfully')</script>";
                echo "<script>window.open('../home/index.php','_self')</script>";
            } 
            else 
            {
                echo "<script>alert('Can't Reserve')</script>";
            }
        }
    }


    //part Cat boarding service
    function boarding_service()
    {
        global $mysqli;
        $user_id = getUserId();
        $name_cat = $_POST['name_cat'];
        $detail_grooming = $_POST['detail_boarding'];
        $start = $_POST['start'];
        $end = $_POST['end'];

        if (isset($_POST['boarding'])) 
        {
            $insert_boarding = "INSERT INTO cat_boarding (user_id, name_cat, start_board, end_board, detail_boarding, date_boarding) 
                                VALUES (?, ?, ?, ?, ?, NOW())";

            $stmt_insert_boarding = mysqli_prepare($mysqli, $insert_boarding);
            
            //ถ้าไม่ทำ prepared เวลา user กรอกข้อมูลแปลกๆมา error เลย เช่น shy , Eat a lot, don't like the cold weather.
            if ($stmt_insert_boarding) 
            {
                mysqli_stmt_bind_param($stmt_insert_boarding, "issss", $user_id, $name_cat, $start, $end, $detail_grooming);
                $result_boarding = mysqli_stmt_execute($stmt_insert_boarding);

                if ($result_boarding) 
                {
                    echo "<script>alert('Reserve cat boarding successfully')</script>";
                    echo "<script>window.open('../home/index.php','_self')</script>";
                } 
                else 
                {
                    echo "<script>alert('Failed to reserve cat boarding')</script>";
                }

                // Close the prepared statement
                mysqli_stmt_close($stmt_insert_boarding);
            } 
            else 
            {
                echo "<script>alert('Failed to prepare the statement')</script>";
            }
        }
    }

?>