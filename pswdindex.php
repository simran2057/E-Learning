<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/Exception.php';
require 'vendor/PHPMailer.php';
require 'vendor/SMTP.php';
session_start();
require("admin/connection/config.php");
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
   <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" <script src="https://cdn.tailwindcss.com">
   <script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>

<body class=" overflow-x-hidden lg:overflow-x-auto lg:overflow-hidden flex items-center justify-center lg:h-screen">
   <div class="login-container container  w-full h-2/3  mt-32 lg:h-screen-75 bg-white lg:border border-gray-300 rounded-lg flex  justify-between shadow-lg shadow-slate-500 ">


      <!-- product Side -->
      <div class="w-full   lg:mt-0  flex relative ">

         <div class="  items-center lg:justify-center  w-full m-auto ml-20 opacity-100 lg:bg-opacity-100">

            <img src="https://us.123rf.com/450wm/liravega258/liravega2581804/liravega258180400001/100320652-education-online-training-courses-distance-education-vector-illustration-internet-studying-online-bo.jpg?ver=6" width="650" alt="">
         </div>


      </div>
      <?php
      if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
         $email = $_POST["email"];
         $email = filter_var($email, FILTER_SANITIZE_EMAIL);
         $email = filter_var($email, FILTER_VALIDATE_EMAIL);
         if (!$email) {
            $error .= "<p>Invalid email address please type a valid email address!</p>";
         } else {
            $sel_query = "SELECT * FROM `students` UNION SELECT * FROM `teachers` WHERE email='" . $email . "'";
            $results = mysqli_query($conn, $sel_query);
            $row = mysqli_num_rows($results);
            if ($row == "") {
               $error .= "<p>No user is registered with this email address!</p>";
            }
         }
         if ($error != "") {
            echo "<div class='error'>" . $error . "</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
         } else {
            $expFormat = mktime(
               date("H"),
               date("i"),
               date("s"),
               date("m"),
               date("d") + 1,
               date("Y")
            );
            $expDate = date("Y-m-d H:i:s", $expFormat);
            $key = md5(2418 * 2 + $email);
            $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
            $key = $key . $addKey;
            // Insert Temp Table
            mysqli_query(
               $conn,
               "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
               VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');"
            );

            $output = '<p>Dear user,</p>';
            $output .= '<p>Please click on the following link to reset your password.</p>';
            $output .= '<p>-------------------------------------------------------------</p>';
            $output .= '<p><a href="http://localhost/E-Learning/reset-password.php?
key=' . $key . '&email=' . $email . '&action=reset" target="_blank">reset-password.php
?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
            $output .= '<p>-------------------------------------------------------------</p>';
            $output .= '<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
            $output .= '<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';
            $body = $output;
            $subject = "Password Recovery";
            $email_to = $email;
            $fromserver = "noreply@yourwebsite.com";
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = "smtp.mailtrap.io"; // Enter your host here
            $mail->SMTPAuth = true;
            $mail->Username = "a2884ea00704a3"; // Enter your email here
            $mail->Password = "195996ab2d7d21"; //Enter your password here
            $mail->Port = 2525;
            $mail->IsHTML(true);
            $mail->From = "";
            $mail->FromName = "AllPHPTricks";
            $mail->Sender = $fromserver; // indicates ReturnPath header
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($email_to);
            if (!$mail->Send()) {
               echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
               echo "<div class='error' style='color:black;'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
            }
         }
      } else {
      ?>
         <div class="w-2/3 rounded-lg mt-32 ml-8">
            <div class="form-wrapper flex items-center lg:h-full px-10 relative z-10  lg:pt-0 shadow-lg rounded-lg">
               <div class="w-full space-y-5">
                  <?php
                  if (isset($_GET['msg'])) {
                     $msg = $_GET['msg'];
                     if ($msg == 'loginerror') {
                  ?>
                        <div class="alert alert-warning alert-dismissible fade show bg-gray-200 w-1/2  h-10 m-auto text-center rounded-lg" role="alert">
                           <p class="text-red-500 p-2 font-semibold">* Your credentials are wrong.</p>
                        </div>

                        <script>
                           $(".alert").alert();
                        </script>
                  <?php
                     }
                  }
                  ?>
                  <div class="form-caption flex items-end justify-center text-center space-x-3 mb-8 mt-4">
                     <span class="text-3xl font-semibold text-blue-500">Reset</span>
                     <span class="text-3xl font-semibold text-blue-500">Password</span>
                  </div>
                  <form method="post" action="" name="reset"><br /><br />
                     <div class="form-element">
                        <label class="space-y-2 w-full lg:w-4/5 block mx-auto">
                           <span class="block text-base text-gray-800 tracking-wide">Email:</span>
                           <span class="block">
                              <input type="text" name="email" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                           </span>
                        </label>
                     </div>
                     <div class="form-element">
                        <span class="w-full lg:w-4/5 block mx-auto p-6 ">
                           <button type="submit" name="submit" class="cursor-pointer w-full p-3 bg-blue-800 text-white rounded-2xl focus:outline-none active:outline-none focus:bg-theme-yellow active:bg-theme-yellow hover:bg-theme-yellow transition-all">
                              Reset Password
                           </button>
                        </span>
                     </div>
                  </form>
               </div>
            </div>
            <!-- form wrapper -->
         </div>
         <!-- Login Form End-->

         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
      <?php } ?>

   </div>
   <?php
   @require("admin/inc/footer.php");
   ?>