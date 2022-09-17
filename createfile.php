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
                $filename = $_POST['filename'];

                $dataFile = $_FILES['dataFile']['name'];
                //$dataFile consit info like hello.jpg
                $filesize = $_FILES['dataFile']['size'];
                $explode_values = explode('.', $dataFile);
                //$explode_values become array having data in the form $explode_values = ['hello','jpg']
                $name = $explode_values[0];
                $fname = str_replace(' ', '', $name);
                $finalname = strtolower($fname . time());
                $ext = $explode_values[1];

                $finalfile = $finalname . '.' . $ext;
                if ($filename != "") {
                    if ($filesize < 2000000) {
                        if ($ext == 'jpg' || $ext == 'png' || $ext == 'pdf' || $ext == 'jpeg') {
                            move_uploaded_file($_FILES['dataFile']['tmp_name'], "uploads/" . $finalfile);
                            $query = "INSERT INTO files (name,filelink,ext) VALUES('$filename','$finalfile','$ext')";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
            ?>
                                <meta http-equiv="refresh" content="0; URL=managefile.php?msg=csuccess" />
            <?php
                                echo "File is uploaded successfully.";
                            } else {
                                echo "File couldn't uploaded successfully.";
                            }
                        } else {
                            echo "File Extension doesn't match. We only accept jpg, png, pdf.";
                        }
                    } else {
                        echo "File size exceeded.";
                    }
                } else {
                    echo "File name is necessary.";
                }
            }
            ?>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Upload File</h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">File Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="filename" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">File</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="dataFile" placeholder="">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!--end::Wizard Form-->
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