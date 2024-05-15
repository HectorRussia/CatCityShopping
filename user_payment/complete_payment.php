<?php
include("../server-login/database.php");

if (isset($_POST['user_id']) && isset($_POST['payment'])) 
{
    global $mysqli;

    $user_id = $_POST['user_id'];

    $select_total = "SELECT DISTINCT amount_due FROM user_orders WHERE user_id = $user_id ORDER BY order_date DESC";
    $result = mysqli_query($mysqli, $select_total);

    // accessing images
    $image_qr = $_FILES['qrcode']['name'];
    // accessing image tmp name
    $temp_image = $_FILES['qrcode']['tmp_name'];

    $row = mysqli_fetch_array($result); 
    
    $total_price = $row['amount_due'];

    if ($image_qr == '' or $temp_image == '') 
    {
        echo "<script>alert('Please upload the payment receipt')</script>";
    } 
    else 
    {
        move_uploaded_file($temp_image, "../admin_cat/evident_money/$image_qr");
        $insert_payment = "INSERT INTO complete_buy (user_id, amount_due, image_qr, date)  VALUES ('$user_id', '$total_price', '$image_qr', NOW())";
        $result_payment = mysqli_query($mysqli, $insert_payment);

        if ($result_payment) 
        {
            echo "<script>alert('Payment completed successfully')</script>";
            echo "<script>window.open('../home/index.php','_self')</script>";
        } 
        else 
        {
            echo "<script>alert('Failed to complete payment')</script>";
        }
    }
    
} 
else 
{
    echo "<script>alert('Not found users')</script>";
    header("Location:../home/farmcat.php");
    exit;
}
?>

