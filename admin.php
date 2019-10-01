<?php
$rs=0;
include_once("dbconnect.php");
$adminid=$_POST['adminid'];
$adminname=$_POST['adminname'];
$adminaddr=$_POST['adminaddr'];
$adminmob=$_POST['adminmob'];
$adminmail=$_POST['adminmail'];
$adminpsswrd=$_POST['adminpsswrd'];
$adminpsswrd=md5($adminpsswrd);
$flag=0;
$sql="select * from admin ;";
$rs=mysql_query($sql) or die(mysql_error());
while($d=mysql_fetch_assoc($rs))
{
	if(($d['adminid']==$adminid)||($d['adminmob']==$adminmob)||($d['adminmail']==$adminmail))
	{$flag=1;
		?>
        <script>alert('You Are Entering Duplicate values Please Check Again');
    window.location.href="addadmin.php";
    </script>
        <?php
	}
}
if($flag==0)
{
$sql="insert into admin values('".$adminid."','".$adminname."','".$adminaddr."','".$adminmob."','".$adminmail."','".$adminpsswrd."');";
$rs=mysql_query($sql) or die(mysql_error());
if($rs!=0)
{
	if(isset($_SESSION["adminid"]))
	{ ?>
	<script>alert('Data Saved Successfully');
    window.location.href="viewadmin.php";
    </script>
	<?php 	}
	else
	{  ?><script>alert('Now Login Again');
    window.location.href="login.php";
    </script>
	<?php 
	}
}}
 ?>