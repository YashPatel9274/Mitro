<?php
include_once("dbconnect.php");
if(isset($_SESSION["adminid"]))
	{ 
	
	$bdate=date('Y-m-d');
	$nseat=$_SESSION['nseat'];
$sql="insert into bill ( `adminid`, `custid`, `busid`, `busfrom`, `busto`, `ondate`, `timestart`, `bustype`, `seatno`, `price`, `billdate`) values('".$_SESSION['adminid']."','".$_SESSION['custid']."','".$_SESSION['busid']."','".$_SESSION['busfrom']."','".$_SESSION['busto']."','".$_SESSION['date']."','".$_SESSION['timestart']."','".$_SESSION['bustype']."','".implode("-",$nseat)."','".$_SESSION['total']."','".$bdate."');";
    $rs=mysql_query($sql) or die(mysql_error());
    if($rs!=0)
    {
		unset($_SESSION['custid']);
		unset($_SESSION['busid']);
		unset($_SESSION['busfrom']);
		unset($_SESSION['busto']);
		unset($_SESSION['priseprst']);
		unset($_SESSION['timestart']);
		unset($_SESSION['date']);
		unset($_SESSION['bustype']);
		unset($_SESSION['nseat']);
		unset($_SESSION['total']);
				unset($_SESSION['seat']);
		?><script>alert('Bill Saved');
    	window.location.href="index.php";
		</script>
		<?php 
    }
	}
	else
	{
?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>
 ?>