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
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>

<body class="bg-gray-100">

    <!-- start navbar -->
    <?php
    require("admin/inc/navbar.php")
    ?>
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
        <!-- DataTales Example -->
        <div class=" flex-1 p-6 md:mt-16">

            <?php

            // When create a task form is submitted, 
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $site_key = $_POST['site_key'];
                $site_value = $_POST['site_value'];

                if ($name != "" && $site_key != "" && $site_value != "") {
                    //Create query is also called INSERT INTO QUERY
                    $create_query = "INSERT INTO site_config (name,site_key,site_value) VALUES('$name','$site_key','$site_value')";
                    $create_result = mysqli_query($conn, $create_query);
                    if ($create_result) {
            ?>
                        <meta http-equiv="refresh" content="0; URL=managesiteconfig.php?msg=csuccess" />
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Unable to create</strong>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>All fields are necessary.</strong>
                    </div>

                    <script>
                        $(".alert").alert();
                    </script>
            <?php
                }
            }

            ?>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Create site config</h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Site Key <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="site_key" id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Site Value <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="site_value" id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                </form>
            </div>

        </div>
        <!-- end wrapper -->

        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- end script -->



        <?php
        require("inc/footpart.php")
        ?>