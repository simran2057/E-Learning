<?php
session_start();
require("connection/config.php");
require("connection/secureuser.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" <script src="https://cdn.tailwindcss.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="profile/profile.css">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>

<body class="bg-gray-100">
<?php
require("admin/inc/navbar.php")
?>

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <?php
require("admin/inc/sidebar.php")
?>
    </div>
    <!-- end sidbar -->
    <!-- DataTales Example -->
    <div class=" flex-1 p-6 md:mt-16">
    <?php
require("profile/profile.php")
?>
 </div>


</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/scripts.js"></script>

<?php require('inc/footpart.php'); ?>