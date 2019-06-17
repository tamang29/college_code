<?php

if(isset($_GET['od']))
{
    $dell=$_GET['od'];
    $con=mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,"asian") or die(mysqli_error($con));

    $del="DELETE from student where sn='$dell'";
    $delet=mysqli_query($con,$del);
    if(!$delet)
    {
        echo "Error";
    }
    else{
       
        header('location:sel.php');
    }


}

?>