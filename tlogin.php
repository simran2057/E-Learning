<?php
@require("inc/header.php");
?>

<body class=" overflow-x-hidden lg:overflow-x-auto lg:overflow-hidden flex items-center justify-center lg:h-screen">
  <div class="login-container container  w-full h-2/3 mt-20 m-auto lg:h-screen-75 bg-white lg:border border-gray-300 rounded-lg flex  justify-between shadow-lg shadow-slate-500 ">


    <!-- product Side -->
    <div class="w-full  mt-32 lg:mt-0  flex relative ">

      <div class="  items-center lg:justify-center  w-full m-auto ml-20 opacity-100 lg:bg-opacity-100">

        <img src="https://us.123rf.com/450wm/liravega258/liravega2581804/liravega258180400001/100320652-education-online-training-courses-distance-education-vector-illustration-internet-studying-online-bo.jpg?ver=6" width="650" alt="">
      </div>


    </div>
    <!-- Product Side End-->

    <!-- Login Form -->
    <div class="w-2/3 border-l">
      <div class="form-wrapper flex items-center lg:h-full px-10 relative z-10 pt-16 lg:pt-0 shadow-lg rounded-lg">
        <div class="w-full space-y-5">
          <?php
          if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            if ($msg == 'loginerror') {
          ?>
              <div class="alert alert-warning alert-dismissible fade show bg-gray-200 w-1/2  h-10 m-auto text-center rounded-lg" role="alert">
                <p class="text-red-500 p-2 font-semibold">* Your credentials are wrong.</p>
              </div>

              <script>
                $(".alert").alert();
              </script>
          <?php
            }
          }
          ?>
          <div class="form-caption flex items-end justify-center text-center space-x-3 mb-8 mt-4">
            <span class="text-3xl font-semibold text-blue-500">Login</span>
            <span class="text-3xl font-semibold text-blue-500">Form</span>
          </div>
          <!-- form caption -->
          
              <form class="user"
              action="process/tloginpage.php"
              method="POST" enctype="multipart/form-data">
                <div class="form-element">
                  <label class="space-y-2 w-full lg:w-4/5 block mx-auto">
                    <span class="block text-base text-gray-800 tracking-wide">Email:</span>
                    <span class="block">
                      <input type="text" name="email" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                    </span>
                  </label>
                </div>
                <!-- form element -->


                <div class="form-element">
                  <label class="space-y-2 w-full lg:w-4/5 block mx-auto">
                    <span class="block text-base text-gray-800 tracking-wide">Password:</span>
                    <span class="block">
                      <input type="password" name="password" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                      <i class="fas fa-eye  z-20 absolute right-28 mt-4"></i>
                    </span>
                  </label>
                </div>
                <!-- form element -->

                <div class="form-element">
                  <div class="w-full lg:w-4/5  mx-auto pt-2 flex items-center justify-between">
                    <label class=" text-gray-800 tracking-wide flex items-center space-y-2 select-none">
                    </label>
                    <a href="pswdindex.php" class=" text-gray-800 tracking-wide inline-block border-b border-gray-300">Forgot Password?</a>
                  </div>
                </div>
                <!-- form element -->

                <div class="form-element">
                  <span class="w-full lg:w-4/5 block mx-auto p-6 ">
                    <button type="submit" name="login" class="cursor-pointer w-full p-3 bg-blue-800 text-white rounded-2xl focus:outline-none active:outline-none focus:bg-theme-yellow active:bg-theme-yellow hover:bg-theme-yellow transition-all">
                      Login
                    </button>
                  </span>
                </div>
                <!-- form element -->

                
              </form>
         
              
        </div>
      </div>
      <!-- form wrapper -->
    </div>
    <!-- Login Form End-->


  </div>
  <script>
    const pswrdField = document.querySelector(".user .form-element input[type='password']"),
      toggleBtn = document.querySelector(".user .form-element i");

    toggleBtn.onclick = () => {
      if (pswrdField.type == "password") {
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
      } else {
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");

      }
    }
  </script>
