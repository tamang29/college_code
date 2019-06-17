<?php
$val=$_GET['od'];

$con=mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,"asian") or die(mysqli_error($con));
$sele="SELECT * from student where sn=$val";
$se=mysqli_query($con,$sele);
$row=mysqli_fetch_array($se);


?>
<html>
    <head></head>
    <body>
        <div style="margin:0 auto;">
        <img src="img/<?php echo $row['image'];?>" style="height:300px;width:300px;border-radius:50%;">
        <br>
        Name:<?php echo $row['name']; ?>
        <br>
        Address:<?php echo $row['address']; ?>
        <br>
        Gender:<?php echo $row['gender']; ?>
        <br>
</div>
</body>
</html>

