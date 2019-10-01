<?php
include_once("dbconnect.php");
if(isset($_POST['login']))
{
	$adminid=$_POST['adminid'];
	$adminpsswrd=$_POST['adminpsswrd'];
	$adminpsswrd=md5($adminpsswrd);
	$sql="select *from admin where adminid='".$adminid."';";
	$rs=mysql_query($sql) or die(mysql_error());
		 $rw=mysql_fetch_assoc($rs);
		 $pwd=$rw['adminpsswrd'];
		 if($adminpsswrd==$pwd)
		 {$_SESSION["adminid"]=$adminid;
			 ?><script>alert('Login Successfully');
    window.location.href="index.php";
    </script>
	<?php 
			 
		 }
		 else
		 {			 ?><script>alert('Something Is Wrong Login Again');
    window.location.href="login.php";
    </script>
	<?php 
		}
}
?>