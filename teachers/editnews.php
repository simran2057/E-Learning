<?php
session_start();
require("../connection/config.php");
require("../connection/secureuser.php");
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
        $show_query = "SELECT * FROM news WHERE id=$id";
        $show_result = mysqli_query($conn, $show_query);
        $row = $show_result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
    }
    ?>
    <?php
    require("inc/navbar.php")
    ?>

    <!-- strat wrapper -->
    <div class="flex flex-row flex-wrap p-4 ">

        <!-- start sidebar -->
            <?php
            require("inc/sidebar.php")
            ?>
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
                        $title = $_POST['title'];
                        $content = $_POST['content'];
                        $date = $_POST['date'];

                        if ($title != "" && $content != "" && $date != "" ) {
                            //edit query is also called UPDATE QUERY
                            $edit_query = "UPDATE news SET title='$title', content='$content', date='$date' WHERE id=$id";
                            $edit_result = mysqli_query($conn, $edit_query);
                            if ($edit_result) {
                    ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>updated successfully.</strong>
                                    <meta http-equiv="refresh" content="0; URL=news.php?msg=csuccess" />
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
                        <h6 class="m-0 font-weight-bold text-dark">Update News </h6>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Name <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="title" id="" value="<?php echo $title; ?>" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Content<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="content" id="" value="<?php echo $content; ?>" aria-describedby="helpId" required>
                            </div>
                            <div class="form-group">
                                <label for="">Date<span style="color:red;">*</span></label>
                                <input type="date" class="form-control" name="date" id="" value="<?php echo $date; ?>" aria-describedby="helpId" placeholder="" required>
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