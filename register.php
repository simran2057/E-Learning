<?php
@require("inc/header.php");
@require("connection/config.php");
?>
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
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = md5($_POST['password']);


                    if ($name != "" && $password != "" && $email != "" && $phone != "") {
                        //Create query is also called INSERT INTO QUERY
                        $create_query = "INSERT INTO users (name,password,email,phone) VALUES('$name','$password','$email' , '$phone')";
                        echo $create_query;
                        $result = mysqli_query($conn, $create_query);
                        echo $result;
                        if ($result) {
                ?>
                            <meta http-equiv="refresh" content="0; URL=admindashboard.php?msg=csuccess" />
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>User couldn't be created successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show bg-gray-200 w-1/2  h-10 m-auto text-center rounded-lg" role="alert">
                            <p class="text-red-500 p-2 font-semibold">* All fields are necessary</p>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                <?php
                    }
                }

                ?>
                <div class="form-caption flex items-end justify-center text-center space-x-3 mb-10 mt-5">
                    <span class="text-3xl font-semibold text-blue-500">Register</span>
                    <span class="text-3xl font-semibold text-blue-500">Form</span>
                </div>
                <!-- form caption -->

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-element">
                        <label class="space-y-1 w-full lg:w-4/5 block mx-auto">
                            <span class="block text-base text-gray-800 tracking-wide">Full Name:</span>
                            <span class="block">
                                <input type="text" name="name" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                            </span>
                        </label>
                    </div>
                    <!-- form element -->

                    <div class="form-element">
                        <label class="space-y-1 pt-1 w-full lg:w-4/5 block mx-auto">
                            <span class="block text-base text-gray-800 tracking-wide">Email:</span>
                            <span class="block">
                                <input type="email" name="email" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                            </span>
                        </label>
                    </div>
                    <!-- form element -->


                    <div class="form-element">
                        <label class="space-y-1 pt-1 w-full lg:w-4/5 block mx-auto">
                            <span class="block text-base text-gray-800 tracking-wide">Password:</span>
                            <span class="block">
                                <input type="password" id="password" name="password" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                            </span>
                        </label>
                    </div>
                    <!-- form element -->

                    <div class="form-element">
                        <label class="space-y-1 pt-1 w-full lg:w-4/5 block mx-auto">
                            <span class="block text-base text-gray-800 tracking-wide">Confirm Password:</span>
                            <span class="block">
                                <input type="password" id="confirm_password" name="confirm_password" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                            </span>
                        </label>
                    </div>
                    <!-- form element -->

                    <div class="form-element">
                        <label class="space-y-1 pt-1 w-full lg:w-4/5 block mx-auto">
                            <span class="block text-base text-gray-800 tracking-wide">Phone:</span>
                            <span class="block">
                                <input type="tel" name="phone" class=" border lg:border-2 border-gray-400 lg:border-gray-200 w-full p-2 rounded-lg">
                            </span>
                        </label>
                    </div>
                    <!-- form element -->

                    <div class="form-element">
                        <div class="w-full lg:w-4/5 mx-auto pt-2 flex items-center justify-between">
                            <label class=" text-gray-800 tracking-wide flex items-center space-x-2 select-none">
                                <span class="block text-gray-800 font-semibold tracking-wide">Already have an account?</span>
                            </label>
                            <a href="login.php" class=" text-blue-800 tracking-wide inline-block border-b-2 font-semibold border-gray-300">Login</a>
                        </div>
                    </div>
                    <!-- form element -->



                    <div class="form-element">
                        <span class="w-full lg:w-4/5 block mx-auto p-6 ">
                            <button type="submit" name="submit" class="cursor-pointer w-full p-3 bg-blue-800 text-white rounded-2xl focus:outline-none active:outline-none focus:bg-theme-yellow active:bg-theme-yellow hover:bg-theme-yellow transition-all">
                                Submit
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
<?php
@require("inc/footpart.php");
?>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>