
<?php



if(isset($_POST['trigger'])){
    $filename=$_FILES['img']['name'];//name of file in filename//
move_uploaded_file($_FILES['img']['tmp_name'],"img/$filename");
$name=$_POST['user'];
$address=$_POST['add'];
$gen=$_POST['gender'];

$con=mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,"asian") or die(mysqli_error($con));
$in="insert into student values('','$name','$address','$filename','$gen')";
$ins=mysqli_query($con,$in)or die(mysqli_error($con));
//echo "Data insertion successful";
header('location:sel.php');
}

?>


