
<?php
session_start();
require('../connection/config.php');
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);
    // test
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM students WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE students SET status = '{$status}' WHERE id = {$row['id']}");
                if($sql2){
                    $_SESSION['email']= $row['email'];
                    $_SESSION['name']= $row['name'];
                    $_SESSION['id']= $row['id'];
                    echo header("Location: ../students/stddashboard.php");
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo header("Location: ../stdlogin.php?msg=loginerror");
            }
        }else{
            echo header("Location: ../stdlogin.php?msg=loginerror");
        }
    }else{
        echo "All input fields are required!";
    }
}