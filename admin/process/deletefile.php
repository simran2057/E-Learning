<?php

require('../connection/config.php');
$id=$_GET['id'];

$query_file="SELECT filelink FROM files WHERE id=$id";
$result_file=mysqli_query($conn,$query_file) or die(mysqli_error($conn));
$row=$result_file->fetch_assoc();
$filelink=$row["filelink"];
$filedel="../../uploads/".$filelink;
unlink($filedel);
//unlink function deletes the files

$query="DELETE FROM files WHERE id=$id";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
if($result) {
 	/*while updating and just showing same page 
 	reloading same page
 	echo "<meta http-equiv='refresh' content='0'>";*/
 echo header("Location: ../../managefile.php?msg=dsuccess");
 }
 else
 {
echo header("Location: ../../managefile.php?msg=derror");
 }
 ?>    