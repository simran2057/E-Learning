
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
                    <strong>News is deleted successfully.</strong>
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
                    <strong>News couldn't be deleted successfully.</strong>
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
            <h6 class="m-0 font-weight-bold text-primary">News & Notices</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_query = "SELECT * FROM news ORDER BY created_at DESC";
                        $select_result = mysqli_query($conn, $select_query);
                        $count = 0;
                        while ($data = mysqli_fetch_array($select_result)) {
                            $count += 1; //$count = $count + 1;
                        ?>
                            <tr id="<?php echo $data['id'] ?>">
                                <td><?php echo $count; ?></td>
                                <td>
                                    <a name="" id="" class="btn btn-primary btn-sm " href="editnews.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                    <a name="" id="" class="btn btn-danger btn-sm remove" href="deletenews.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                                </td>
                                <td><?php echo $data['title']; ?></td>
                                <td><?php echo $data['content']; ?></td>
                                <td><?php echo $data['date']; ?></td>
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
<script type="text/javascript">
    $(".remove").click(function() {
        var id = $(this).parents("tr").attr("id");


        if (confirm('Are you sure to remove this record ?')) {
            $.ajax({
                url: '/E-Learning/teachers/deletenews.php',
                type: 'GET',
                data: {
                    id: id
                },
                success: function(data) {
                    $("#" + id).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });
</script>