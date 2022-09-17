<?php
session_start();
$subid = $_GET['id'];
$teachername = $_SESSION['name'];
?>
<div class="container-fluid">
                <div class="card shadow mb-4">
                    <?php
                    if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        if ($msg == 'dsuccess') {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Assignment is deleted successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        } else if ($msg == 'derror') {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Assignment couldn't be deleted successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>News is created successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Update Assignment</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Information</th>
                                        <th>Last Submission Date</th>
                                        <th>Total Marks</th>
                                        <th>Attached Files</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_query = "SELECT * FROM assigns  WHERE assigns.uploaded_by= '$teachername' ORDER BY created_at DESC";
                                    $select_result = mysqli_query($conn, $select_query);
                                    $count = 0;
                                    while ($data = mysqli_fetch_array($select_result)) {
                                        $count += 1; //$count = $count + 1;
                                    ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['subject']; ?></td>
                                            <td><?php echo $data['info']; ?></td>
                                            <td><?php echo $data['due_date']; ?></td>
                                            <td><?php echo $data['marks']; ?></td>
                                            <td><a href="../uploads/<?php echo $data['filelink']; ?>">File Link</a></td>

                                                                                </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end content -->

            </div>