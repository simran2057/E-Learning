<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    if ($title != "" && $content != ""  && $date != "") {
        //Create query is also called INSERT INTO QUERY
        $create_query = "INSERT INTO news (title,content,date) VALUES('$title' , '$content' , '$date')";
        $create_result = mysqli_query($conn, $create_query);
        if ($create_result) {
?>
        <?php
        } else {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Subject couldn't be created successfully.</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>
        <?php
        }
    } else {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>All fields are necessary.</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
<?php
    }
}

?>

<div class="card-header py-3 bg-white">
    <h6 class="m-0 font-weight-bold text-dark">Create a news</h6>
</div>
<div class="card-body">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title<span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="">Content<span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="content" id="" aria-describedby="helpId" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="">Date<span style="color:red;">*</span></label>
            <input type="date" class="form-control" name="date" id="" aria-describedby="helpId" placeholder="" required>
        </div>
       

        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
    </form>
</div>