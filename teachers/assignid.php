<?php
session_start();
$assign_id = $_GET['t_id'];
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
        <?php
            $select_query = "SELECT * FROM assignments where assignments.id='$assign_id' ";
            $select_result = mysqli_query($conn, $select_query);
            $count = 0;
            while ($data = mysqli_fetch_array($select_result)) {
                $count += 1; //$count = $count + 1;
            ?>
            <div class="card-header py-3 bg-white">
                <h6 class="m-0 font-weight-bold text-dark">Assignment Information</h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="flex justify-between">
                        <div class="form-group w-full">
                            <label for="">Assignment Title<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data['title']; ?>" >
                        </div>

                        <div class="form-group w-full ml-4">

                            <label for="">Subject<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data['subject']; ?>" >

                        </div>

                    </div>
                    <div class="flex justify-between">
                        <div class="form-group w-full">
                            <label for="">Assignment Information<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="info" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data['info']; ?>" >
                        </div>
                        <div class="form-group w-full ml-4">
                            <label for="">Assignment Marks<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="marks" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data['marks']; ?>" >
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="form-group w-full">
                            <label for="">Last Date of submission<span style="color:red;">*</span></label>
                            <input type="date" class="form-control" name="due_date" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data['due_date']; ?>" >
                        </div>
                    </div>


                </form>
            </div>
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
                            $query = "INSERT INTO assign_file (assign_id,name,filelink,ext,uploaded_by) VALUES('$assign_id',$filename','$finalfile','$ext','$teachername')";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
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

            <div class="form-group w-full ml-4">
                <label for="">Assignment File (if any)<span style="color:red;">*</span></label>
                <div class="flex">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="filename" placeholder="File name">
                    <input type="file" class="form-control" name="dataFile" id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <button type="submit" class="btn btn-dark mt-4" name="submit">Submit</button>

            <?php
            @include('manageassign.php');
            ?>

        </div>
        <!-- strat content -->

        <!-- end content -->
    </div>
    <!-- end wrapper -->
</body>
</html>