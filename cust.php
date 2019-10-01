<?php
$rs=0;
include_once("dbconnect.php");
	if(isset($_SESSION["adminid"]))
	{ 
$custid=$_POST['custid'];
$custname=$_POST['custname'];
$custaddr=$_POST['custaddr'];
$custmob=$_POST['custmob'];
$f=0;
$custmail=$_POST['custmail'];
$sql="select * from bus;";
$rs=mysql_query($sql) or die(mysql_error());
while($d=mysql_fetch_assoc($rs))
{
	if(($d['custid']==$custid)||($d['custmob']==$custmob)||($d['custmail']==$custmail))
	{
	$f=1;	?>
        <script>alert('You Are Entering Duplicate values Please Check Again');
    window.location.href="addcust.php";
    </script>
        <?php
	}
}
if($f==0){
$sql1="insert into customer values('".$custid."','".$custname."','".$custaddr."','".$custmob."','".$custmail."');";
    $rs1=mysql_query($sql1) or die(mysql_error());
    if($rs1!=0)
    {
			$_SESSION["custid"]=$custid;
		?><script>alert('Data Saved Successfully');
    window.location.href="setroute.php";
    </script>
	<?php 
   }}
   	}
	else
	{
?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>