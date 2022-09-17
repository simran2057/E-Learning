 <!-- start navbar -->
 <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

<!-- logo -->
<div class="flex-none w-56 flex flex-row items-center">
    <img src="assets/img/logo.png" class="w-10 flex-none">
    <strong class="capitalize ml-1 flex-1">E-Learning</strong>

    <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
    </button>
</div>
<!-- end logo -->



<!-- navbar content -->
<div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
    <!-- left -->
    <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">

    </div>
    <!-- end left -->

    <!-- right -->
    <div class="flex flex-row-reverse items-center">

        <!-- user -->
        <div class="dropdown relative md:static">

            <button class="menu-btn focus:outline-none  flex flex-wrap items-center">
                <div class=" overflow-hidden rounded-full">
                <i class="fad fa-user-edit text-xs mr-1"></i>
                </div>

                <div class="ml-2 capitalize flex ">
                    <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"><?php echo $_SESSION['name']  ?></h1>
                    <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                </div>
            </button>


            <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            
                <!-- item -->
                <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="../E-Learning/admin/process/logout.php">
                    <i class="fad fa-user-times text-xs mr-1"></i>
                    log out
                </a>
                <!-- end item -->

            </div>
        </div>
        <!-- end user -->



    </div>
    <!-- end right -->
</div>
<!-- end navbar content -->

</div>
<!-- end navbar -->