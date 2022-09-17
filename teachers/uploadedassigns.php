<?php
session_start();
$assignmentid = $_GET['id'];
$teachername = $_SESSION['name'];
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

            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Uploaded Assignment</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Information</th>
                                        <th>Submitted By</th>                                        
                                        <th>Submission Date</th>
                                        <th>Attached Files</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_query = "SELECT * FROM  assigns INNER JOIN asg_files ON assigns.id=asg_files.assign_id  WHERE assigns.uploaded_by='$teachername'  ORDER BY created_at DESC";
                                    $select_result = mysqli_query($conn, $select_query);
                                    $count = 0; 
                                    while ($data = mysqli_fetch_array($select_result)) {
                                        $count += 1; //$count = $count + 1;
                                    ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>

                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['subject']; ?></td>
                                            <td><?php echo $data['info']; ?></td>
                                            <td><?php echo $data['uploaded_by']; ?></td>
                                            <td><?php echo $data['uploaded_at']; ?></td>
                                            <td><a href="../uploads/<?php echo $data['filelink']; ?>">File Link</a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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