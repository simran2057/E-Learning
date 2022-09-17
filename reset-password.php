<?php
include('admin/connection/config.php');
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
    if (
      isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"])
      && ($_GET["action"] == "reset") && !isset($_POST["action"])
    ) {
      $key = $_GET["key"];
      $email = $_GET["email"];
      $curDate = date("Y-m-d H:i:s");
      $query = mysqli_query(
        $conn,
        "SELECT * FROM `password_reset_temp` WHERE `key`='" . $key . "' and `email`='" . $email . "';"
      );
      $row = mysqli_num_rows($query);
      if ($row == "") {
        $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="https://www.allphptricks.com/forgot-password/index.php">
Click here</a> to reset password.</p>';
      } else {
        $row = mysqli_fetch_assoc($query);
        $expDate = $row['expDate'];
        if ($expDate >= $curDate) {
    ?>

          <br />
          <div class="w-2/3 border-l mt-24">
            <div class="form-wrapper flex items-center lg:h-full px-10 relative z-10  lg:pt-0 shadow-lg rounded-lg">
              <div class="w-full space-y-5">
                <div class="form-caption flex items-end justify-center text-center space-x-3 mb-8 mt-4">
                  <span class="text-3xl font-semibold text-blue-500">Reset-Password</span>
                  <span class="text-3xl font-semibold text-blue-500">Form</span>
                </div>
                <form method="post" action="" name="update">
                  <input type="hidden" name="action" value="update" />
                  
                  <div class="form-element">
                    <label class="space-y-2 w-full lg:w-4/5 block mx-auto">
                      <span class="block text-base text-gray-800 tracking-wide">Enter New Password:</span>
                      <div class="flex">
                        <input type="password" name="pass1" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg" required />
                      </div>
                    </label>
                  </div>

                  <div class="form-element">
                  <label class="space-y-2 w-full lg:w-4/5 block mx-auto">
                      <span class="block text-base text-gray-800 tracking-wide">Enter New Password:</span>
                      <div class="flex">
                        <input type="password" name="pass2" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg" required />
                      </div>
                    </label>
                  </div>
                
                  <input type="hidden" name="email" value="<?php echo $email; ?>" />
                  <div class="form-element">
                    <span class="w-full lg:w-4/5 block mx-auto p-6 ">
                      <button type="submit" value="Reset Password" class="cursor-pointer w-full p-3 bg-blue-800 text-white rounded-2xl focus:outline-none active:outline-none focus:bg-theme-yellow active:bg-theme-yellow hover:bg-theme-yellow transition-all">
                        Reset Password
                      </button>
                    </span>
                  </div>
                </form>
          <?php
        } else {
          $error .= "<h2>Link Expired</h2>
                      <p>The link is expired. You are trying to use the expired link which 
                      as valid only 24 hours (1 days after request).<br /><br /></p>";
        }
      }
      if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br />";
      }
    } // isset email key validate end


    if (
      isset($_POST["email"]) && isset($_POST["action"]) &&
      ($_POST["action"] == "update")
    ) {
      $error = "";
      $pass1 = mysqli_real_escape_string($conn, $_POST["pass1"]);
      $pass2 = mysqli_real_escape_string($conn, $_POST["pass2"]);
      $email = $_POST["email"];
      $curDate = date("Y-m-d H:i:s");
      if ($pass1 != $pass2) {
        $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
      }
      if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br />";
      } else {
        $pass1 = md5($pass1);
        mysqli_query(
          $conn,
          "UPDATE `students`  SET `password`='" . $pass1 . "' 
                      WHERE `email`='" . $email . "';"
        );

        echo '<div class=""><p>Congratulations! Your password has been updated successfully.</p>
                      <p><a href="https://localhost/E-Learning/stdlogin.php">
                      Click here</a> to Login.</p></div><br />';
      }
    }
          ?>

              </div>
            </div>
          </div>
          <!-- form wrapper -->
  </div>
  <?php
  @require("admin/inc/footer.php");
  ?>