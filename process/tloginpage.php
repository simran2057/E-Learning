<?php
require('../connection/config.php');
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM teachers WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if($count==1 )
    {
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['email']= $row['email'];
        $_SESSION['name']= $row['name'];
        $_SESSION['t_id']= $row['t_id'];
        echo header("Location: ../teachers/tdashboard.php");
    }
    else 
    {
        echo header("Location: ../login.php?msg=loginerror");
    }

}


?>
