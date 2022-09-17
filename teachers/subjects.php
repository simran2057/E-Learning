<div class="grid grid-cols-4 gap-6 xl:grid-cols-1 -mt-20">
    <?php
    $select_query = "SELECT subjects.name , subjects.id FROM subjects INNER JOIN teachers ON subjects.teacher = teachers.name where teachers.t_id='$teacherid'";
    $select_result = mysqli_query($conn, $select_query);
    $count = 0;
    while ($data = mysqli_fetch_array($select_result)) {
        $count += 1; //$count = $count + 1;
    ?>
    <div class="report-card">

    <!-- card -->
    <a href="subid.php?id=<?php echo $data['id'] ?>">
    <div class="card ">
            <div class="card-body flex flex-col">
            
                <!-- top -->
                <div class="flex  justify-between items-center mt-2">
                    <div class=" text-indigo-700  fas fa-chart-line text-4xl"></div>
                    <span class="rounded-lg text-white  text-base p-3 "  style="background-color: #95AFBA ;">
                    <?php echo $data['name']; ?>
                </span>
               
                </div>
               
                <!-- end top -->
    
            </div>
        </div>
    </a>
        
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        
    </div>
    <!-- end card -->
    <?php
                                    }
                                    ?>

</div>

