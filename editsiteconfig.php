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
    <!-- To show data into the fields when user visit edit page -->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $show_query = "SELECT * FROM site_config WHERE id=$id";
        $show_result = mysqli_query($conn, $show_query);
        $row = $show_result->fetch_assoc();
        $name = $row['name'];
        $site_key = $row['site_key'];
        $site_value = $row['site_value'];
        $status = $row['status'];
    }
    ?>
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
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <?php

                    // When create a task form is submitted, 
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $site_key = $_POST['site_key'];
                        $site_value = $_POST['site_value'];
                        $status = $_POST['status'];

                        if ($name != "" && $site_key != "" && $site_value != "" && $status != "") {
                            //edit query is also called UPDATE QUERY
                            $edit_query = "UPDATE site_config SET name='$name', site_key='$site_key', site_value='$site_value', status='$status' WHERE id=$id";
                            $edit_result = mysqli_query($conn, $edit_query);
                            if ($edit_result) {
                    ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>updated successfully.</strong>
                                    <meta http-equiv="refresh" content="0; URL=managesiteconfig.php?msg=csuccess" />
                                </div>

                                <script>
                                    $(".alert").alert();
                                </script>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>couldn't be updated successfully.</strong>
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
                        <h6 class="m-0 font-weight-bold text-dark">Update Site-Config </h6>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Name <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="name" id="" value="<?php echo $name; ?>" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Site Key<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="site_key" id="" value="<?php echo $site_key; ?>" aria-describedby="helpId" required>
                            </div>
                            <div class="form-group">
                                <label for="">Site Value<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="site_value" id="" value="<?php echo $site_value; ?>" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Status <span style="color:red;">*</span></label>
                                <select class="form-control" name="status" id="" required>
                                    <?php
                                    if ($status == "New") {
                                    ?>
                                        <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                        <option value="Progress">Progress</option>
                                        <option value="Done">Done</option>
                                        <option value="Cancelled">Cancelled</option>
                                    <?php
                                    } else if ($status == "Progress") {
                                    ?>
                                        <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                        <option value="New">New</option>
                                        <option value="Done">Done</option>
                                        <option value="Cancelled">Cancelled</option>
                                    <?php
                                    } else if ($status == "Done") {
                                    ?>
                                        <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                        <option value="New">New</option>
                                        <option value="Progress">Progress</option>
                                        <option value="Cancelled">Cancelled</option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                        <option value="New">New</option>
                                        <option value="Progress">Progress</option>
                                        <option value="Done">Done</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>

                </div>


            </div>
            <!-- end wrapper -->
        </div>
    </div>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- end script -->





    <?php require('inc/footpart.php'); ?>