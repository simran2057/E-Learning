  <!-- start sidebar -->
  <div id="sideBar" class=" h-1/2 flex flex-col flex-wrap  p-6  w-64 bg-white md:fixed md:top-0 md:z-30  md:shadow-xl animated faster shadow-md rounded-lg">


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
      <a href="../../students/stddashboard.php" class=" capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
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
      <a href="chat/chat.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-base ml-2 "></i>
        <span class="ml-4">Chats</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="../students/assignment.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-base ml-2 "></i>
        <span class="ml-4">Assignments</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="../users/index/example.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-calendar-edit text-base ml-2 "></i>
        <span class="ml-4">Calendar</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-base ml-2 "></i>
        <span class="ml-4">file manager</span>
      </a>
      <!-- end link -->

       <!-- link -->
       <a href="#" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-base ml-2 "></i>
        <span class="ml-4">Profile</span>
      </a>
      <!-- end link -->





    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->