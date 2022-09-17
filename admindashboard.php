<?php
session_start();
require("connection/config.php");
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
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" <script src="https://cdn.tailwindcss.com">
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>

<body class="bg-gray-100">
  <!-- start navbar -->


  <!-- navbar content -->
  <?php
  require("admin/inc/navbar.php")
  ?>
  <!-- end navbar content -->

  <!-- end navbar -->


  <!-- strat wrapper -->
  <div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">

      <?php
      require("admin/inc/sidebar.php");
      ?>

    </div>
    <!-- end sidbar -->

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">


      <!-- General Report -->
      <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


        <!-- card -->
        <div class="report-card">
          <div class="card">
            <a href="manageuser.php" class="text-decoration-none">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center mt-6">
                <div >
                  <span class="font-semibold">Users</span >
                </div>                    
                <i class="fas fa-fw fa-user ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                
                <!-- end bottom -->

              </div>
            </a>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->
        <div class="report-card">
          <div class="card">
            <a href="managecontact.php" class="text-decoration-none">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center mt-6">
                <div class="">
                  <span  class="font-semibold text-red-700">Contacts</span>
                </div>
                    <i class="fas fa-fw fa-phone text-red-700 ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                

              </div>
            </a>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->
        <div class="report-card">
          <div class="card">
            <a href="manageuser.php" class="text-decoration-none">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center mt-6">
                <div class="">
                    <span class="font-semibold text-yellow-600">Total Students</span>
                </div>
                <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                
                <!-- end bottom -->

              </div>
            </a>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->
        <div class="report-card">
          <div class="card">
            <a href="manageuser.php" class="text-decoration-none">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center mt-6">
                <div class="">
                  <span class="font-semibold text-green-700"> Total Teachers</span>
                </div>
                  <div class="h6 text-green-700 fad fa-users"></div>
                                 </div>
                <!-- end top -->

                <!-- bottom -->
                
                <!-- end bottom -->

              </div>
            </a>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


      </div>
      <!-- End General Report -->




    </div>
    <!-- end content -->

  </div>
  <!-- end wrapper -->

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/scripts.js"></script>
  <!-- end script -->



  <?php
  require("inc/footpart.php")
  ?>