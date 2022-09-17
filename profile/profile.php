<?php 
session_start();
?>
<div class="main-content">
    <!-- Page content -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-xl-4  mb-5 mb-xl-0">
          <div class="card card-profile shadow justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <?php
              if (isset($_GET['id'])) {
                  $id = $_GET['id'];
                  $show_query = "SELECT * FROM users WHERE id=$id";
                  $show_result = mysqli_query($conn, $show_query);
                  $row = $show_result->fetch_assoc();
                  $name = $row['name'];
                  $email = $row['email'];
                  $phone = $row['phone'];
                  $role = $row['role'];
              }
              ?>
            <div class="card-body pt-8">
            
              <div class="text-center">
                <h3>
                <?php echo $name; ?><span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
