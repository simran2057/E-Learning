<?php
require('../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete_query = "DELETE FROM news WHERE id=$id";
    echo $delete_query;
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result)
    {
        
        echo header('Location: news.php?msg=dsuccess');
    }
    else 
    {
        echo header('Location: news.php?msg=derror');
    }
}
?> 