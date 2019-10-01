<?php
include_once("dbconnect.php");
include_once("function.php");
	if(isset($_SESSION["adminid"]))
	{ 
	$gotto=$_GET['q'];
	echo gettooptionlist("bus",$gotto,"busto");
	}
	else
	{
?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>