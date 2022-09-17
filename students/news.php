<div class="card shadow mb-4">
    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">News & Notices</h6>
                    </div>
                    <?php
                                    $select_query = "SELECT * FROM news ORDER BY created_at DESC";
                                    $select_result = mysqli_query($conn, $select_query);
                                    $count = 0;
                                    while ($data = mysqli_fetch_array($select_result)) {
                                        $count += 1; //$count = $count + 1;
                                    ?>
                    <div class="card-body">
                                    
                                    <div class="font-semibold p-1">
                                            <i class="fad fa-calendar-edit text-base mr-2 "></i>

                                            <?php echo $data['title']; ?>
                                            </div>
                                        <div class="ml-2">
                                            <li>
                                            <?php echo $data['content']; ?>
                                            </li>
                                            <li>
                                                Date:
                                            <?php echo $data['date']; ?>
                                            </li>
                                        </div>
                                           
                                                                         
                                    
                        </div>
                        <hr>
                        <?php
                                    }
                                    ?>  
                    </div> 
                   
</div>