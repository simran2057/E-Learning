<!-- navbar section start -->
<nav class=" flex justify-around py-6 mx-auto bg-white sticky top-0 z-50 ">
  <div class=" flex items-center">
    <?php
    $name_query = "SELECT * FROM site_config WHERE site_key='logo'";
    $name_result = mysqli_query($conn, $name_query);
    $row = $name_result->fetch_assoc();

    ?>
    <h3 class="text-3xl font-medium text-blue-500">
      <?php

      echo $row['site_value'];
      ?></span>
    </h3>
  </div>
  <!-- left header section -->
  <div class="items-center text-base font-semibold hidden space-x-8 lg:flex">
    <a href="#home " class="hover:text-blue-500 hover:underline">Home</a>
    <a href="#aboutus" class="hover:text-blue-500 hover:underline">About Us</a>
    <a href="#features" class="hover:text-blue-500 hover:underline">Features</a>
    <a href="#contactus" class="hover:text-blue-500 hover:underline">Contact Us</a>
  </div>
  <!-- right header section -->
  <div class="flex items-center space-x-2 text-sm">
    <a href="login.php">
      <button class="px-2 py-2 text-blue-100 bg-blue-800 rounded-md">
        Admin Login
      </button>
    </a>
    <a href="tlogin.php">
      <button class="px-2 py-2 text-blue-100 bg-blue-800 rounded-md">
        Teacher Login
      </button>
    </a>
    <a href="stdlogin.php">
      <button class="px-2 py-2 text-blue-100 bg-blue-800 rounded-md">
        Student Login
      </button>
    </a>
    
  </div>
</nav>
<!-- navbar section ends -->