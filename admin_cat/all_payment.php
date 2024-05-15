<?php
    include("../server-login/database.php");
    //name of after send form input
    if(isset($_POST['all_payment']))
    {
       
    }
?>

<h2 class="text-center">List All payment</h2>
<!--เดะทำเป็น table โชว-->
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