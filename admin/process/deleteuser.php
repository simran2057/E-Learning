<?php
require('../connection/config.php');
echo '<script>alert("Are you sure you want to delete it?")</script>';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete_query = "DELETE FROM users WHERE id=$id";
    echo $delete_query;
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result)
    {
        echo header('Location: ../../manageuser.php?msg=dsuccess');
    }
    else 
    {
        echo header('Location: ../../manageuser.php?msg=derror');
    }
}
?> 