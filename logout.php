<?php
include_once("dbconnect.php");
if(isset($_SESSION["adminid"]))
{
	session_destroy();
	unset($_SESSION["adminid"]);
	?><script>alert('logout Successfully');
    window.location.href="index.php";
    </script>
	<?php 
}

?>
