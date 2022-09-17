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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">


            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <?php
                    if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        if ($msg == 'dsuccess') {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>User is deleted successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        } else if ($msg == 'derror') {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>User couldn't be deleted successfully.</strong>
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
                                <strong>User is created successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Users</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            $select_query = "SELECT * FROM users Where role='Admin' ";
                            $select_result = mysqli_query($conn, $select_query);
                            $count = 0;
                            while ($data = mysqli_fetch_array($select_result)) {
                                $count += 1; //$count = $count + 1;
                            ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Action</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Phone-No</th>
                                            <th>Role</th>
                                            <!-- <th>Status</th> -->

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <h2>Admins</h2>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td>
                                                <a name="" id="" class="btn btn-primary btn-sm" href="edituser.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                                <a name="" id="" class="btn btn-danger btn-sm" href="admin/process/deleteuser.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                                            </td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['phone']; ?></td>
                                            <td><?php echo $data['role']; ?></td>
                                            <!-- <td><button type="button" name="" id="" class="btn btn-primary btn-sm" btn-lg btn-block"><?php echo $data['status']; ?></button></td> -->
                                        </tr>
                                    <?php
                                }
                                    ?>
                                    </tbody>
                                </table>

                                <?php
                                $select_query = "SELECT * FROM teachers ";
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Action</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Phone-No</th>
                                            <th>Semester</th>
                                            <!-- <th>Status</th> -->

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <h2>Teachers</h2>
                                        <tr>
                                            <?php
                                            $select_result = mysqli_query($conn, $select_query);
                                            $count = 0;
                                            while ($data = mysqli_fetch_array($select_result)) {
                                                $count += 1; //$count = $count + 1;
                                            ?>
                                                <td><?php echo $count; ?></td>
                                                <td>
                                                    <a name="" id="" class="btn btn-primary btn-sm" href="editteachers.php?id=<?php echo $data['t_id']; ?>" role="button">Edit</a>

                                                    <a name="" id="updateDetails" class="btn btn-danger btn-sm" role="button">Delete</a>
                                                </td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['phone']; ?></td>
                                                <td><?php echo $data['semester']; ?></td>
                                                <!-- <td><button type="button" name="" id="" class="btn btn-primary btn-sm" btn-lg btn-block"><?php echo $data['status']; ?></button></td> -->
                                        </tr>
                                    <?php
                                            }
                                    ?>
                                    </tbody>
                                </table>

                                <?php
                                $select_query = "SELECT * FROM students ";
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Action</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Phone-No</th>
                                            <th>Semester</th>
                                            <!-- <th>Status</th> -->

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <h2>Students</h2>
                                            <?php
                                            $select_result = mysqli_query($conn, $select_query);
                                            $count = 0;
                                            while ($data = mysqli_fetch_array($select_result)) {
                                                $count += 1; //$count = $count + 1;
                                            ?>
                                        <tr id="<?php echo $data['id'] ?>">
                                                <td><?php echo $count; ?></td>
                                                <td>
                                                    <a name="" id="" class="btn btn-primary btn-sm" href="editstudents.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                                    <button class="btn btn-danger btn-sm remove">Delete</button>
                                                </td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['phone']; ?></td>
                                                <td><?php echo $data['semester']; ?></td>
                                                <!-- <td><button type="button" name="" id="" class="btn btn-primary btn-sm" btn-lg btn-block"><?php echo $data['status']; ?></button></td> -->
                                        </tr>
                                    <?php
                                            }
                                    ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

            </div>


            <output></output>



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

<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/E-Learning/process/deletestudent.php',
               type: 'GET',
               data: {id: id},
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>