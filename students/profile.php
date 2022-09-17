<?php
session_start();
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
  <div class=" flex-1 p-6 md:mt-16  ml-10 rounded-md"> 
  <?php
           
                  $show_query = "SELECT * FROM students WHERE students.id=$userid";
                  $show_result = mysqli_query($conn, $show_query);
                  $row = $show_result->fetch_assoc();
                  $name = $row['name'];
                  $email = $row['email'];
                  $phone = $row['phone'];
                  $semester = $row['semester'];
              
              ?>
  <div class="card-body  shadow-lg w-2/5 m-auto bg-white rounded-2xl">
            
            <div class="w-full ">
                <div class="heading bg-primary text-white p-2 w-1/2  m-auto rounded-md text-center ">
                   <span class="text-xl">Your Profile </span>
                </div>
                <hr>
                <div class="h5 mt-4">
                <i class="fad fa-user mr-8 mt-8 ml-6 "></i>Student
              </div>
              <div class="h5 font-weight-300">
              <i class="fad fa-user mr-8 mt-8 ml-6"></i><?php echo $row['name']; ?>
              </div>
              
              <div class="h5 font-weight-300">
                <i class="fad fa-copy mr-8 mt-8 ml-6"></i>
                <?php
                if($row['semester']=1){
                    echo 'First semester';
                }
                else{
                    echo 'Second semester';
                }
                ?>
              <div class="h5 font-weight-300">
                <i class="fad fa-phone mr-8 mt-8 ml-6"></i><?php echo $row['phone']; ?>
              </div>
              <div class="h5 font-weight-300">
              <i class="fad fa-envelope mr-8 mt-8 ml-6"></i><?php echo $row['email']; ?>
              </div> 
              <div class="h5 font-weight-300">
                <i class="fad fa-home mr-8 mt-8 ml-6 mb-6"></i>Lagrandee International College
              </div>
            </div>
  


    

</div>
  <!-- strat content -->
  
  <!-- end content -->
</div>
<!-- end wrapper -->
</body>
</html>
