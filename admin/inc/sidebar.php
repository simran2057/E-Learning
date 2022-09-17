 <?php
 session_start();
 
 ?>
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion " id="accordionSidebar">

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="admindashboard.php">
             <i class="fas fa-fw fa-tachometer-alt ml-4 mt-2"></i>
             <span class="font-semibold p-6">Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
   

     <!-- Nav Item - Utilities Collapse Menu -->
     <li>
         <div class="dropdown mt-2 relative md:static">

             <button class="menu-btn  flex flex-wrap items-center  justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                 <div class="rounded-full">
                 <i class="fas fa-fw fa-user"></i>
                 </div>

                 <div class="ml-2 capitalize flex ">
                     <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Users</h1>
                     <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                 </div>
             </button>


             <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md  z-20 right-0 w-full py-2 animated faster">

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createuser.php">
                    Create User
                     
                 </a>
                 <!-- end item -->

                 <hr>
                  <!-- item -->
                  <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createstudents.php">
                    Create Student
                     
                 </a>
                 <!-- end item -->

                 <hr>
                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createteachers.php">
                    Create Teacher
                     
                 </a>
                 <!-- end item -->

                 <hr>
                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="manageuser.php">
                   Manage User
                 </a>
                 <!-- end item -->

             </div>
         </div>
     </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li>
         <div class="dropdown mt-2 relative md:static">

             <button class="menu-btn  flex flex-wrap items-center  justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                 <div class="rounded-full">
                 <i class="fas fa-fw fa-book"></i>
                 </div>

                 <div class="ml-2 capitalize flex ">
                     <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Subjects</h1>
                     <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                 </div>
             </button>


             <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md  z-20 right-0 w-full py-2 animated faster">

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createsubjects.php">
                    Create Subject
                     
                 </a>
                 <!-- end item -->

                 <hr>

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="managesubjects.php">
                   Manage Subject
                 </a>
                 <!-- end item -->

             </div>
         </div>
     </li>
     <!-- Nav Item - Utilities Collapse Menu -->

     <li>
         <div class="dropdown mt-2 relative md:static">

             <button class="menu-btn  flex flex-wrap items-center  justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                 <div class="rounded-full">
                 <i class="fad fa-cheese-swiss text-xs mr-2"></i>
                 </div>

                 <div class="ml-2 capitalize flex ">
                     <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Site-Config</h1>
                     <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                 </div>
             </button>


             <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md  z-20 right-0 w-full py-2 animated faster">

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createsiteconfig.php">
                    Create SiteConfig
                     
                 </a>
                 <!-- end item -->

                 <hr>

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="managesiteconfig.php">
                   Manage SiteConfig
                 </a>
                 <!-- end item -->

             </div>
         </div>
     </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li>
         <div class="dropdown mt-2 relative md:static">

             <button class="menu-btn  flex flex-wrap items-center  justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                 <div class="rounded-full">
                 <i class="fas fa-fw fa-phone"></i>
                 </div>

                 <div class="ml-2 capitalize flex ">
                     <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Contacts</h1>
                     <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                 </div>
             </button>


             <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md  z-20 right-0 w-full py-2 animated faster">

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="managecontact.php">
                   View Contacts
                 </a>
                 <!-- end item -->

             </div>
         </div>
     </li>


     <!-- Nav Item - Utilities Collapse Menu -->
     <li>
         <div class="dropdown mt-2 relative md:static">

             <button class="menu-btn  flex flex-wrap items-center  justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                 <div class="rounded-full">
                 <i class="fas fa-fw fa-file"></i>
                 </div>

                 <div class="ml-2 capitalize flex ">
                     <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Files</h1>
                     <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                 </div>
             </button>


             <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md  z-20 right-0 w-full py-2 animated faster">

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="createfile.php">
                    Create File
                     
                 </a>
                 <!-- end item -->

                 <hr>

                 <!-- item -->
                 <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="managefile.php">
                   Manage File
                 </a>
                 <!-- end item -->

             </div>
         </div>
     </li>

     

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>


 </ul>
 <!-- End of Sidebar -->

 <!-- This example requires Tailwind CSS v2.0+ -->