<?php
session_start();
$teacherid = $_SESSION['id'];
$stdname = $_SESSION['name'];
require("../connection/config.php");
require("connection/secureuser.php");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/calender.css">
  <link rel="stylesheet" type="text/css" href="assets/css/example.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" <script src="https://cdn.tailwindcss.com">
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
  <script src="assets/js/scripts.js"></script>

</head>

<body class="bg-gray-200">
    

<?php
require('inc/navbar.php')
?>

<!-- strat wrapper -->
<div class=" flex flex-row flex-wrap p-4  ">
  <?php
  require('inc/sidebar.php')
  ?>
  <div class=" flex-1 p-6 md:mt-16 bg-white ml-10 rounded-md"> 

  
    <?php 
    @include('assign.php');
    ?>

</div>
  <!-- strat content -->
  
  <!-- end content -->
</div>
<!-- end wrapper -->
</body>
</html>
