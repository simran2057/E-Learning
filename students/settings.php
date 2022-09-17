<?php
session_start();
$id = $_SESSION['id'];
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
    $show_query = "SELECT * FROM students WHERE id=$id";
    $show_result = mysqli_query($conn, $show_query);
    $password = md5($_GET['password']);

    ?>
    <?php
    require("inc/navbar.php")
    ?>

    <!-- strat wrapper -->
    <div class=" flex flex-row flex-wrap p-4">

        <!-- start sidebar -->
            <?php
            require("inc/sidebar.php")
            ?>
        <!-- end sidbar -->

        <div class=" flex-1 p-6 md:mt-16 bg-white ml-10 rounded-md">


            <?php

            // When create a task form is submitted, 
            if (isset($_POST['submit'])) {
                $password = md5($_POST['password']);

                if ($password != "") {
                    //edit query is also called UPDATE QUERY
                    $edit_query = "UPDATE students SET  password='$password' WHERE id=$id";
                    $edit_result = mysqli_query($conn, $edit_query);
                    if ($edit_result) {
            ?>
                        <meta http-equiv="refresh" content="0; URL=stddashboard.php?msg=csuccess" />
                    <?php
                    } else {
                    ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>User couldn't be updated successfully.</strong>
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
                <h6 class="m-0 font-weight-bold text-dark">Update Password</h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">New Password<span style="color:red;">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" value="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password<span style="color:red;">*</span></label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <button type="password" class="btn btn-dark" name="submit">Submit</button>
                </form>
            </div>




        </div>


    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- end script -->




    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
    <?php require('inc/footpart.php'); ?>