<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    $info = $_POST['info'];
    $marks = $_POST['marks'];
    $due_date = $_POST['due_date'];
    $filename = $_POST['filename'];
    $dataFile = $_FILES['dataFile']['name'];
    //$dataFile consit info like hello.jpg
    $filesize = $_FILES['dataFile']['size'];
    $explode_values = explode('.', $dataFile);
    //$explode_values become array having data in the form $explode_values = ['hello','jpg']
    $name = $explode_values[0];
    $fname = str_replace(' ', '', $name);
    $finalname = strtolower($fname . time());
    $ext = $explode_values[1];
    $finalfile = $finalname . '.' . $ext;
    if ($title != "" && $subject != "" && $due_date != "" && $info != "" && $marks != "" && $filename != "") {
        if ($ext == 'jpg' || $ext == 'png' || $ext == 'pdf' || $ext == 'jpeg') {
            move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalfile);
            //Create query is also called INSERT INTO QUERY
            $create_query = "INSERT INTO assigns (title,subject,due_date,info,marks,name,filelink,ext,uploaded_by)  VALUES('$title' , '$subject' , '$due_date' , '$info' , '$marks', '$filename','$finalfile','$ext' , '$teachername' )";
            $create_result = mysqli_query($conn,$create_query);
            if ($create_result) {

?>
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Assignment uploaded successfully</strong>
                </div>
<?php
            } else {
                echo "Assignment couldn't be uploaded";
            }
        }
            else {
                echo "File Extension doesn't match. We only accept jpg, png, pdf.";
            }
        
    } else {
        echo "All fields are necessary.";
    }
}

?>

<div class="card-header py-3 bg-white">
    <h6 class="m-0 font-weight-bold text-dark">Assignment Information</h6>
</div>
<div class="card-body">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="flex justify-between">
            <div class="form-group w-full">
                <label for="">Assignment Title<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" required>
            </div>

            <div class="form-group w-full ml-4">

                <label for="">Subject<span style="color:red;">*</span></label>

                <select name="subject" class="form-control" id="">
                 <?php
                    $select_query = "SELECT subjects.name , subjects.id FROM subjects INNER JOIN teachers ON subjects.teacher = teachers.name where teachers.t_id='$teacherid'";
                    $select_result = mysqli_query($conn, $select_query);
                    $count = 0;
                    while ($data = mysqli_fetch_array($select_result)) {
                        $count += 1; //$count = $count + 1;
                    ?>
                        <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>
                    <?php
                    }
                    ?>
                </select>

            </div>

        </div>
        <div class="flex justify-between">
            <div class="form-group w-full">
                <label for="">Assignment Information<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="info" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="form-group w-full ml-4">
                <label for="">Assignment Marks<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="marks" id="" aria-describedby="helpId" placeholder="" required>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="form-group w-full">
                <label for="">Last Date of submission<span style="color:red;">*</span></label>
                <input type="date" class="form-control" name="due_date" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="form-group w-full ml-4">
                <label for="">Assignment File (if any)<span style="color:red;">*</span></label>
                <div class="flex">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="filename" placeholder="File name">
                    <input type="file" class="form-control" name="dataFile" id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-dark mt-4" name="submit">Submit</button>
    </form>
</div>