<?php
$rs=0;
include_once("dbconnect.php");
if(isset($_SESSION["adminid"]))
{
$driverid=$_POST['driverid'];
$drivername=$_POST['drivername'];
$drivermob=$_POST['drivermob'];
$drivermail=$_POST['drivermail'];
$driversalary=$_POST['driversalary'];
$busid=$_POST['busid'];
$busfrom=$_POST['busfrom'];
$busto=$_POST['busto'];
$timestart=$_POST['timestart'];
$bustype=$_POST['bustype'];
$priceprst=$_POST['priceprst'];
$f=0;
$sql="select * from bus;";
$rs=mysql_query($sql) or die(mysql_error());
while($d=mysql_fetch_assoc($rs))
{
	if(($d['busid']==$busid)||($d['drivermob']==$drivermob)||($d['drivermail']==$drivermail)||($d['driverid']==$driverid))
	{
	$f=1;	?>
        <script>alert('You Are Entering Duplicate values Please Check Again');
    window.location.href="addbus.php";
    </script>
        <?php
	}
}
if($f==0){
$sql="insert into bus values('".$driverid."','".$drivername."','".$drivermob."','".$drivermail."','".$driversalary."','".$busid."','".$busfrom."','".$busto."','".$timestart."','".$bustype."','".$priceprst."',0,0);";
    $rs=mysql_query($sql) or die(mysql_error());
    if($rs!=0)
    {?><script>alert('Data Saved Successfully');
    window.location.href="viewbus.php";
    </script>
	<?php }
}}
	else
	{
?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>
 ?>