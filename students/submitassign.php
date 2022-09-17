<?php
session_start();
$assignmentid = $_GET['id'];
$stdname = $_SESSION['name'];
$userid = $_SESSION['id'];
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
            if (isset($_POST['upload'])) {
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
                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'pdf' || $ext == 'jpeg') {
                        move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalfile);
                        //Create query is also called INSERT INTO QUERY
                        $create_query = "INSERT INTO asg_files (assign_id,name,filelink,ext,uploaded_by,userid)  VALUES('$assignmentid', '$filename','$finalfile','$ext' , '$stdname','$userid' )";
                        $create_result = mysqli_query($conn, $create_query);
                        if ($create_result) {

            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Assignment uploaded successfully</strong>
                            </div>
            <?php
                        } else {
                            echo "Assignment couldn't be uploaded";
                        }
                    } else {
                        echo "File Extension doesn't match. We only accept jpg, png, pdf.";
                    }
                } else {
                    echo "All fields are necessary.";
                }
            }

            ?>
            <div class="container-fluid">
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Upload Assignment</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div>
                               
                                <?php
                                $select_query = "SELECT * FROM assigns  where assigns.id='$assignmentid'";
                                $select_result = mysqli_query($conn, $select_query);
                                $count = 0;
                                while ($data = mysqli_fetch_array($select_result)) {
                                    $count += 1; //$count = $count + 1;
                                ?>
                                    <div class="flex justify-between">
                                        <div>
                                            <span class="font-semibold">Assignment Tittle :</span><span class="ml-4"><?php echo $data['title']; ?></span>
                                        </div>
                                        <div>
                                            <span class="font-semibold">Assignment Marks :</span><span class="ml-4"><?php echo $data['marks']; ?></span>

                                        </div>
                                    </div>

                                    <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
                                        <tbody>

                                            <tr>
                                                <td class="font-semibold colspan=1">Subject</td>
                                                <td class="col-span-1"><?php echo $data['subject']; ?></td>
                                                <td class="font-semibold colspan=1">Assignmment Description</td>
                                                <td class="col-span-1"><?php echo $data['info']; ?></td>
                                            </tr>


                                        </tbody>
                                    </table>

                                    <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">

                                        <tbody>
                                            <tr>
                                                <td class="colspan=2">View Assignment Paper</td>
                                                <td class="text-danger font-semibold"><a href="../uploads/<?php echo $data['filelink']; ?>" target="_blank">View Assignment Paper</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php
                                }
                                ?>
                            </div>


                            <form action="#" method="POST" enctype="multipart/form-data">
                                <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">

                                    <tbody>
                                        <tr>
                                            <td>Upload answer file</td>
                                            <td><input type="text" class="form-control" placeholder="File name" name="filename"></td>
                                            <td><input type="file" name="dataFile"></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-dark mt-4" name="upload">Upload</button>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- end content -->

            </div>
        </div>
        <!-- strat content -->

        <!-- end content -->
    </div>
    <!-- end wrapper -->
</body>

</html>