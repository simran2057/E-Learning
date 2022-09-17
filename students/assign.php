<?php
$stdname=$_SESSION['name'];
$userid=$_SESSION['id'];

$fetch_times = "SELECT * FROM asg_files where userid='$userid'";
$result = mysqli_query($conn, $fetch_times);
$submittedassignment = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $submittedassignment[$row['assign_id']] = $row;
    }
}

?>
<div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Assignments</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Date of Submission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_query = "SELECT * FROM assigns   ORDER BY created_at DESC";
                                    $select_result = mysqli_query($conn, $select_query);
                                    
                                    $count = 0;
                                    while ($data = mysqli_fetch_array($select_result)) {
                                       if( !isset($submittedassignment[$data['id']])){
                                        $count += 1; //$count = $count + 1;
                                    ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['subject']; ?></td>
                                            <td><?php echo $data['due_date']; ?></td>
                                            <td>
                                            <a name="" id="" class="btn btn-primary btn-sm" href="submitassign.php?id=<?php echo $data['id']; ?>" role="button">Submit</a>
                                                                                        </td>
                                    <?php
                                    }
                                }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end content -->

            </div>