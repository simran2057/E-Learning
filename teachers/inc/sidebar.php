  <!-- start sidebar -->
  <div id="sideBar" class=" h-full relative flex flex-col flex-wrap -mt-40 p-6  w-66 bg-white md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster shadow-md rounded-lg">


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
      <a href="./subject.php" class="mb-3 mt-2 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-envelope-open-text text-base ml-2 "></i>
        <span class="ml-4">Subjects</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="./chat/users.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-base ml-2 "></i>
        <span class="ml-4">Chats</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="../teachers/assignment.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-base ml-2 "></i>
        <span class="ml-4">Assignments</span>

      </a>
      <!-- end link -->
      <!-- link -->
      <a href="../teachers/uploadedassigns.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-base ml-2 "></i>
        <span class="ml-4">Uploaded Assignments</span>

      </a>
      <!-- end link -->
      
      <!-- link -->
      <a href="../teachers/news.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-base ml-2 "></i>
        <span class="ml-4">News/Notice</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="../teachers/calender.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-calendar-edit text-base ml-2 "></i>
        <span class="ml-4">Calendar</span>
      </a>
      <!-- end link -->

       <!-- link -->
       <a href="../teachers/profile.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-user text-base ml-2 "></i>
        <span class="ml-4">Profile</span>
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="../../E-Learning/process/logout.php" class="mb-3 p-1 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-base ml-2 "></i>
        <span class="ml-4 " >Log-Out</span>
      </a>
      <!-- end link -->





    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->
 