<?php
$roll=$_POST['roll'];
$name=$_POST['name'];
$address=$_POST['addres'];
$gmf=$_POST['gend'];

$con=mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,"asian") or die(mysqli_error($con));

$up="UPDATE student set name='$name', address='$address', gender='$gmf' where sn=$roll";
$water=mysqli_query($con,$up);
if(!$water)
{
    echo "Failed".mysqli_error($con);
}
else
{
    header('location:sel.php');
}






?>