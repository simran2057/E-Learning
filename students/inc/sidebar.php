<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<!-- start sidebar -->
<div id="sideBar" class=" h-full relative flex flex-col flex-wrap -mt-40 p-6  w-64 bg-white md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster shadow-md rounded-lg">


  <!-- sidebar content -->
  <div class="flex flex-col">

    <!-- sidebar toggle -->
    <div class="text-right hidden md:block mb-4">
      <button id="sideBarHideBtn">
        <i class="fad fa-times-circle"></i>
      </button>
    </div>
    <!-- end sidebar toggle -->
    <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
      <div class="w-8 h-8 overflow-hidden rounded-full">
        <img class="w-full h-full object-cover" src="../assets/img/user.svg">
      </div>

      <div class="ml-4  ">
        <h1 class="text-base text-gray-800 font-semibold m-0 p-0 leading-none"><?php echo $_SESSION['name']  ?></h1>
      </div>
    </button>
    <hr>
    <!-- link -->
    <a href="./stddashboard.php" class=" capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-home text-base ml-2 "></i>
      <span class="ml-4">Home</span>
    </a>
    <!-- end link -->
    <hr>
    <!-- link -->
    <a href="./subject.php" class="mb-3 mt-2 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-envelope-open-text text-base ml-2 "></i>
      <span class="ml-4">Subjects</span>
    </a>
    <!-- end link -->

    <!-- link -->
    <a href="chat/users.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-comments text-base ml-2 "></i>
      <span class="ml-4">Chats</span>
    </a>
    <!-- end link -->

    <!-- link -->
    <div class="dropdown text-primary p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
    <i class="fad fa-shield-check text-base ml-2 "></i>
      <span class="ml-4">Assignments</span>
      <div class="dropdown-content rounded-lg">
        <div>
          <span class="mt-2">
            <a href="../students/assignment.php">
          New Assignments</a></span>
        </div>
        <div>
          <span class="mt-2">
            <a href="../students/uploadedassign.php">
          uploaded Assignments</a></span>
        </div>
      </div>
    </div>

    <a href="../students/assignment.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      
    </a>
    <!-- end link -->

    <!-- link -->
    <a href="../students/calender.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-calendar-edit text-base ml-2 "></i>
      <span class="ml-4">Calendar</span>
    </a>
    <!-- end link -->

    <!-- link -->
    <a href="../students/profile.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-user text-base ml-2 "></i>
      <span class="ml-4">Profile</span>
    </a>
    <!-- end link -->
     <!-- link -->
     <a href="../students/settings.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-pen text-base ml-2 "></i>
      <span class="ml-4">Settings</span>
    </a>
    <!-- end link -->

     <!-- link -->
     <a href="../../E-Learning/process/logout.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fad fa-shield-check text-base ml-2 "></i>
      <span class="ml-4">Log-out</span>
    </a>
    <!-- end link -->





  </div>
  <!-- end sidebar content -->

</div>
<!-- end sidbar -->

