<?php
    include("../server-login/database.php");
    //name of after send form input
    if(isset($_POST['insert_time']))
    {
        //name=type_cat
        $add_time=$_POST['add_time'];
        $status=$_POST['status'];
        //$mysqli = require "server-login/database.php";
        //select data form database
        //protect insert repeat
        $select_query = "SELECT * FROM time_grooming WHERE add_time = '$add_time'";
        $result_select=mysqli_query($mysqli,$select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0)
        {
            echo "<script>alert('this time is present inside the database')</script>";
        }
        else
        {
            $insert_query="INSERT INTO time_grooming (add_time,status) value('$add_time','$status')";
            $result=mysqli_query($mysqli,$insert_query);
            echo $result;
            if($result)
            {
                echo "<script>alert(' Time has been inserted successfully')</script>";
                //echo '<script>window.location.href = "index.php";</script>'; // Redirect to a new page after inserting.
            }

        }
    }

    if(isset($_POST['update_TS']))
    {
    
        $update_time = $_POST['update_time'];
        $update_status = $_POST['update_status'];

        
        $time_id = $_POST['id_time'];

        $update_query = "UPDATE time_grooming SET add_time = '$update_time', status = '$update_status' WHERE Time_id = '$time_id'";
        $result = mysqli_query($mysqli, $update_query);

        if($result)
        {
            echo "<script>alert('status has been updated successfully')</script>";
        }
    }



?>

<h2 class="text-center">Managment Table Grooming</h2>

<div class="mt-5">
    <h3 class="text-center">Add Time</h3>
    <form action="" method="post" class="mb-2">
            <!--add_time-->
            <div class="form-outline mb-4 w-50 m-auto mt-3">
                <label for="description" class="form-label">Add time</label>
                <input type="text" name="add_time" id="add_time" class="form-control" placeholder="such 09:00-10:00" autocomplete="off" required="required">
            </div>

                <!--Status-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="born_cat" class="form-label">Status</label>
                <select name="status" id="status" 
                class="form-select">                
                    <option value='available'>available</option>
                    <option value='busy'>busy</option>          
            </select>
            </div>

             <!--button-->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_time" class="btn btn-info mb-3 px-3"
                value="Insert time">
            </div>

    </form>
</div>

<h2 class="text-center">Show time user Grooming</h2>

<div>
    <h3 class="text-center">Update Time & status</h3>
    <!--show table time-->
    <div class="container">
        <div class="row">
            <table class="table table-bordered text-center w-50 m-auto mt-3">
                <thead>
                    <tr class='table-primary'>                        
                        <th>Time</th>
                        <th>status</th>
                        <th>update</th>
                        <th>Detele</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query = "SELECT * FROM time_grooming";
                    $result_query = mysqli_query($mysqli, $select_query);

                    while ($row = mysqli_fetch_assoc($result_query)) 
                    {   
                        $time_id = $row['Time_id'];
                        $showtime = $row['add_time'];
                        $show_status = $row['status'];

                        echo "
                            <form action='' method='post' class='mb-2'>
                                <tr>                        
                                    <td>$showtime</td>
                                    <td>$show_status</td>
                                    <td>
                                        <input type='hidden' name='time_id' value='$time_id'>
                                        <input type='submit' name='update' class='btn btn-info' value='Update'>
                                    </td>
                                    <td>
                                        <input type='hidden' name='time_id' value='$time_id'>
                                        <input type='submit' name='delete' class='btn btn-warning' value='Delete'>
                                    </td>                        
                                </tr>
                            </form>                               
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>  

<?php
    if(isset($_POST['update']))
    {
        $time_id = $_POST['time_id'];
        $select_time = "SELECT * FROM time_grooming WHERE Time_id=$time_id";
        $result_time = mysqli_query($mysqli, $select_time);
        $row_time = mysqli_fetch_assoc($result_time);
        $add_time = $row_time['add_time'];
        $id_time=$row_time['Time_id'];
        $status=$row_time['status'];
        
        echo "
            <form action='' method='post' class='mb-2'>
                <!--update_time-->
                <div class='form-outline mb-4 w-50 m-auto mt-3'>
                    <label for='description' class='form-label'>Add time</label>
                    <input type='text' name='update_time' id='update_time' class='form-control' value='$add_time'>
                </div>

                <!--update_Status-->
                <div class='form-outline mb-4 w-50 m-auto'>
                    <label for='born_cat' class='form-label'>Update Status</label>
                    <select name='update_status' id='update_status' class='form-select'>
                        <option value='$status' selected>$status</option>          
                        <option value='busy'>busy</option>
                        <option value='available'>available</option>          
                    </select>
                </div>

                <!--button-->
                <div class='form-outline mb-4 w-50 m-auto'>
                    <input type='hidden' name='id_time' value='$id_time'>
                    <input type='submit' name='update_TS' class='btn btn-info mb-3 px-3' value='update_Status'>
                </div>
            </form>
        ";   
    }
?>
