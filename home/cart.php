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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="../css-img2.css"><!--ใช้อันนี้เพราะถ้าใช้ css-img มันบัคโค้ดทับกันการ์ดโชวเละหมด-->
    <link rel="stylesheet" href="../popup.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--js-bootstarp-->
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
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

        .cart_img
        {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

    </style>
    <script>
    /*      
        $(document).ready(function () 
        {   
            console.log("โหลดหน้า");

            $(".increase").click(function () 
            {
                var itemId = $(this).data("id");
                console.log("กดเพิ่ม");
                updateQuantity(itemId, "increase", this);
                
            });

            $(".decrease").click(function () 
            {
                var itemId = $(this).data("id");
                updateQuantity(itemId, "decrease", this);
                console.log("กดลด");
            });
            
            function updateQuantity(itemId, action) 
            {
                console.log("Calling the function");
                $.ajax({
                    method: "POST",
                    url: "../function.php/update_quantity.php", 
                    data: { itemId: itemId, action: action },
                    success: function (response) 
                    {
                        // อัปเดตหน้าเว็บหรือทำอย่างอื่นตามต้องการ
                        // ตัวอย่างเช่น รีโหลดหน้าหลังจากอัปเดต
                        // location.reload();
                    },
                    error: function (xhr, status, error) 
                    {
                        console.log("Error:", xhr.responseText);
                        alert("เกิดข้อผิดพลาดในการอัปเดตปริมาณ");
                    }
                });
            }
        });

 */
    </script>
 
</head>
<body>
        <?php if(isset($user)):?>
            <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><h1><img src="../image/cat.jpg" style="width: 150pt; height: 150pt;" ><b>Cat city</b></h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark " aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="user_page.php"><i class="fa-solid fa-user"></i> User</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="cart.php"><i class="fa-solid fa-basket-shopping"></i>Cart</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="farmcat.php"><i class="fa-solid fa-paw"></i> Farm cat</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="shoping.php"><i class="fa-solid fa-cart-shopping"></i> shoping</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-solid fa-phone-volume"></i> contact us</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> logout</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container mt-2">            
            <div style="padding-left: 15%;">
                <h4 style="color: #1151c0;"><img src="../image/home_index/2.jpg" style="width: 200px; hieght: 200px;"> <b>Hi <?=htmlspecialchars($user["username"])?> Welcome to the your cart</b>  <img src="../image/home_index/2.jpg" style="width: 200px; hieght: 200px;"></h4>
            </div>
            <br> 
        </div>

        <!--part update quantity before to card -->
        <div class="container mt-4 ">
            <div class="row">
                    <table class="table table-bordered text-center ">                      
                        <tbody>
                            <?php
                                global $mysqli;
                                $get_ip_add=getIPAddress();
                                $total_price=0;
                                $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                                $result=mysqli_query($mysqli,$cart_query);
                                $result_count=mysqli_num_rows($result);
                                if($result_count>0)
                                {
                                    echo "  <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Product Image</th>
                                                    <th>Quantity</th>
                                                    <th>Total price</th>
                                                    <th>Increase</th>
                                                    <th>Decrease</th>
                                                    <th>Select Remove</th>
                                                    <th>Remove</th>  
                                                </tr>
                                            </thead> 
                                        ";
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $product_id=$row['product_id'];
                                            $select_products="select * from `add_products` where product_id='$product_id'";
                                            $result_products=mysqli_query($mysqli,$select_products);
                                            while($row_product_price=mysqli_fetch_array($result_products))
                                            {   
                                                $price_table=$row_product_price['product_price'];
        
                                                $product_name=$row_product_price['product_name'];
                                                
                                                $product_image1=$row_product_price['product_image1'];

                                                $product_price=array($row_product_price['product_price']); //such [200,300]
                                                
                                                $qty=$row['quantity'];
                                                
                                                // ใช้ number_format เพื่อกำหนดจำนวนทศนิยม
                                                $product_values = number_format($price_table * $qty, 2);

                                                $price_table=$product_values;

                                                //$total_price=$total_price+$product_values;
                                                //$total_price+=$product_values; 
                                                $total_price= number_format($total_price+$product_values, 2);
                                                
                                               
                                        ?>
                                            <tr>
                                                
                                                <td><?php echo $product_name ?></td>
                                                <td ><img src='../admin_cat/product_images/<?php echo $product_image1 ?>' class='cart_img' alt=''></td>
                                                <td>
                                                    <?php
                                                            //$qty=$row['quantity'];
                                                            echo $qty;    
                                                    ?>
                                                </td>
                                                <td><?php echo $price_table ?>/$</td>
                                               
                                                <td>
                                                    <form method="post" action="">
                                                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                                        <input type="submit" value="Increase" name="increase" class='increase btn btn-success px-3 py-2 border-0 mx-3'>
                                                    </form>
                                                </td>

                                                <td>
                                                    <form method="post" action="">
                                                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                                        <input type="submit" value="Decrease" name="decrease" class='decrease btn btn-info px-3 py-2 border-0 mx-3'>
                                                    </form>
                                                </td>

                                                <form action="" method="post">

                                                <td><input type='checkbox' name="removeitem[]" value="<?php echo $product_id ?>"></td>
                                                
                                                <td>
                                                    <input type="submit" value="Remove Cart" class=' btn btn-danger px-3 py-2 border-0 mx-3'
                                                        name="remove_cart">                               
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                }
                                else
                                {
                                    echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                                }
                            
                            ?>
                        </tbody>
                    </table>
                    <div class="d-flex mb-5">
                        <?php

                            $get_ip_add=getIPAddress();
                            $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
                            $result=mysqli_query($mysqli,$cart_query);
                            $result_count=mysqli_num_rows($result);
                            if($result_count>0)
                            {
                                echo "
                                
                                    <h4 class='px-3 mt-3'>
                                        Subtotal : <strong class='text-info'> $total_price /$</strong>
                                    </h4>

                                    <input type='submit' value='Continue shoping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>
                                    
                                    <button class=' bg-secondary p-3 py-2 border-0 text-light'><a href='../function.php/before_checkout.php' class='text-light text-decoration-none'>Checkout</a></button>
                        
                                ";
                            }
                            else
                            {
                                echo "<input type='submit' value='Continue shoping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>";
                            }
                            
                            if(isset($_POST['continue_shopping']))
                            {
                                echo "<script>window.open('shoping.php','_self')</script>";
                            }
                            if(isset($_POST['continue_shopping']))
                            {
                                echo "<script>window.open('shoping.php','_self')</script>";
                            }
                        ?>
                    </div>
            </div>
        </div>
    </form>
    <?php
       
       remove_cart_item();
       increase_item();
       deincrease_item();
    
    ?>

<div class="mt-5">
        <div class="custom-rectangle">
            <div class="box-green">
                <div id="bold-text"> 
                    Get in touch
                </div>
            </div>
            <div class="text-p">
                <P>If you have any doubts or questions, you can contact us at any time. We are always ready to serve customers.</P>
            </div>
            <div class="text-p">
                <p>Our company policy requires us to register as a member before we can access the store page.</p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="custom-rectangle2">
                
                <div class="row">
                        <div class="mt-4 ml-3">
                            <h1><b>Cat city</b></h1>
                            <div class="mt-4">
                                <h5 class="custom-text2">At Cat City, we take pride in our unwavering commitment</h5>
                                <h5 class="custom-text2">to service excellence and the genuine love </h5>
                                <h5 class="custom-text2">we extend to our customers'</h5>
                            </div>
                        </div>

                        <div class="ml-5 burapa2">
                            <div class="mt-4 ml-3">
                                <h5 class="custom-text3">Get in touch</h5>
                                <div class="mt-3 ">
                                    <h5 class="custom-text2">095-768-7460</h5>
                                    <h5 class="custom-text2">www.cat-city.com</h5>
                                    <h5 class="custom-text2">1234 Lincoln Street, Frankfurt, Germany</h5>
                                    <br>
                                    <div>
                                        <h5>
                                            <i class="fa-brands fa-facebook fa-lg"  style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-instagram fa-lg" style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-tiktok"          style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-twitter fa-lg"   style="margin-right: 10px;"></i>
                                            <i class="fa-brands fa-github fa-lg"    style="margin-right: 10px;"></i>
                                        </h5> 
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div> 

    <footer style="background-color: black;">
        <div class="container" >
            <p class="m-0 text-center text-white py-4">Copy Right &copy;2023 cat city</p>
        </div>
    </footer>

        <?php else:?>
            <p><a href="../login.php">Login</a> or <a href="../registor.html">Register</a></p>   

        <?php endif; ?>
        
</body>
</html>