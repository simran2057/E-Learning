<?php
session_start();
require("connection/config.php");
require("connection/secureuser.php"); ?>
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
            if (isset($_POST['submit'])) {
                $semester = $_POST['semester'];
                $name = $_POST['name'];
                $password = md5($_POST['password']);
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                if ($semester != "" && $name != "" && $password != "" && $email != "" && $phone != "") {
                    //Create query is also called INSERT INTO QUERY
                    $create_query = "INSERT INTO students (semester,name,password,email,phone) VALUES('$semester' , '$name','$password','$email' , '$phone')";
                    $create_result = mysqli_query($conn, $create_query);
                    if ($create_result) {
            ?>
                        <meta http-equiv="refresh" content="0; URL=manageuser.php?msg=csuccess" />
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" semester="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>User couldn't be created successfully.</strong>
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
                <h6 class="m-0 font-weight-bold text-dark">Create a User</h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name<span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="">Email<span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password<span style="color:red;">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Confirm Password <span style="color:red;">*</span></label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">Phone-No<span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semester<span style="color:red;">*</span></label>
                        <div class="">
                            <select class="form-control" name="semester">
                                <option value="1">First</option>
                                <option value="2">Second</option>
                                <option value="3">Third</option>
                                <option value="4">Fourth</option>
                                <option value="5">Fifth</option>
                                <option value="6">Sixth</option>
                                <option value="7">Seventh</option>
                                <option value="8">Eight</option>

                            </select>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                </form>
            </div>
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