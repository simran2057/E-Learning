<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['t_id'])){
  header("location: ../stddashboard.php");
}

?>
<?php include_once "header.php"; ?>

<body class="bg-gray-200">

  <div class=" flex flex-row flex-wrap p-4  ">
  <?php include_once "sidebar.php"; ?>
  </div>
    <div class="wrapper w-1/2 m-auto">
      <section class="users">
        <header>
          <div class="content">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM teachers  WHERE t_id = {$_SESSION['t_id']}");
            if (mysqli_num_rows($sql) > 0) {
              $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="details">
            <i class="fad fa-user  mr-2 " style="color: white;"></i>
              <span style="color: white;"><?php echo $row['name'] ?></span>
              <p class="ml-8" style="color: white;"><?php echo $row['status']; ?></p>
            </div>
          </div>
        </header>
        <div class="search">
          <span class="text">Select an user to start chat</span>
          <input type="text" placeholder="Enter name to search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">

        </div>
      </section>
    </div>
 
  <script src="javascript/users.js"></script>

</body>

</html>