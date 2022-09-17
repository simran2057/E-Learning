<!-- home section start -->
<section id="home" class="bg-gray-100 shadow-xl shadow-slate-300 ">
    <div class="container  mx-auto pb-20 ">
        <div class="home-wrapper">
            <div class="flex justify-between row align-items-center ">
                <div class="mx-auto my-auto ">
                    <div class="home__content p-relative z-index-1">
                        <?php
                        $name_query = "SELECT * FROM site_config WHERE site_key='heading1'";
                        $name_result = mysqli_query($conn, $name_query);
                        $row = $name_result->fetch_assoc();

                        ?>
                        <h1>
                            <!-- <span class="text-4xl">E-Learning</span><br> -->
                            <span class="font-bold text-6xl text-blue-500">
                                <?php

                                echo $row['site_value'];
                                ?></span>
                            </span><br>
                            <?php
                        $name_query = "SELECT * FROM site_config WHERE site_key='heading2'";
                        $name_result = mysqli_query($conn, $name_query);
                        $row = $name_result->fetch_assoc();

                        ?>
                            <span class="font-bold text-6xl text-blue-500">
                                <?php

                                echo $row['site_value'];
                                ?></span>
                        </h1>
                        <p class="text-2xl mt-2 text-slate-500"> Enhance your institution and change the way of learning.</p>
                        
                    </div>
                </div>
                <div class="mx-auto mt-5">
                    <img src="https://static.fullestop.com/images/e-learning.svg" alt="" width="600">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home section ends -->