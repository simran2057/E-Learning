<?php
require('../connection/config.php');
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users  WHERE email='$email' AND password='$password' ";
    // if($role='Admin')
    // {
    $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if($count==1 )
    {
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['email']= $row['email'];
        $_SESSION['name']= $row['name'];
        echo header("Location: ../admindashboard.php");
    }
    // }
    // if($role='student')
    // {
    // $result = mysqli_query($conn, $query)
    // or die(mysqli_error($conn));
    // $count = mysqli_num_rows($result);
    // if($count==1 )
    // {
    //     session_start();
    //     $row=mysqli_fetch_assoc($result);
    //     $_SESSION['email']= $row['email'];
    //     $_SESSION['name']= $row['name'];
    //     echo header("Location: ../users/userdashboard.php");
    // }
    // }
    else 
    {
        echo header("Location: ../login.php?msg=loginerror");
    }

}
?>
