<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['t_id'])) {
  header("location: ../stddashboard.php");
}
?>
<?php include_once "header.php"; ?>


<body class="bg-gray-200">
  <div class=" flex flex-row flex-wrap p-4  ">
    <?php include_once "sidebar.php"; ?>
  </div>
  <div class=" flex-1 p-6 md:mt-16  ml-10 rounded-md">

    <div class="wrapper w-1/2 m-auto">
      <section class="chat-area">
        <header>
          <?php
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM students  WHERE id = {$user_id}");
          if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          } else {
            header("location: users.php");
          }
          ?>
          <a href="users.php" class="back-icon p-4" style="color: white ;"><i class="fas fa-arrow-left"></i></a>
          <div class="details">
            <i class="fad fa-user ml-4 mr-4" style="color: white ;"></i>
            <span><?php echo $row['name'] ?></span>
            <p class="ml-16"><?php echo $row['status']; ?></p>
          </div>
        </header>
        <div class="chat-box">

        </div>
        <form action="#" class="typing-area">
          <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
          <button class="bg-primary text-white"><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
  </div>
  <script src="javascript/chat.js"></script>

</body>

</html>