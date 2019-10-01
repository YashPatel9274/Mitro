<?php 
include_once("header.php"); 
$sql="select adminid,adminname,adminaddr,adminmob,adminmail from admin;";
$rs=mysql_query($sql) or die(mysql_error());	
?>


<br><br><br><br><br>
<?php	if(isset($_SESSION["adminid"]))
	{ if(isset($_SESSION['custid']))
unset($_SESSION['custid']);?>
<div id="print">
<form action='addadmin.php'>
<table class="table table-hover table-bordered"width="1000" border="5" align="center">
<tr>
<td align="center">ADMIN DETAILS</td>
<td align="center"><input type='submit' class='alert btn-primary' value='ADD ADMIN'></td>
</tr>
</table>
<table width="1000" border="3" class="table table-hover table-bordered"align="center">
<tr>
  
  <th align="center" scope="col"><div align="center">ADMIN ID</div></th>
  <th align="center" scope="col"><div align="center">ADMIN NAME</div></th>
  <th align="center" scope="col"><div align="center">ADMIN ADDRESS</div></th>
  <th align="center" scope="col"><div align="center">ADMIN MOBILENO</div></th>
  <th align="center" scope="col"><div align="center">ADMIN MAIL</div></th>
  
</tr>
<?php while($d=mysql_fetch_assoc($rs))
{
	echo"<tr><td align='center'>".$d['adminid']."</td><td align='center'>".$d['adminname']."</td><td align='center'>".$d['adminaddr']."</td><td align='center'>".$d['adminmob']."</td><td align='center'>".$d['adminmail']."</td></tr>";}?>
<tr><td align="right" colspan="5"><input type="button" name="Print"  onclick="window.print(print)" id="Print" value="Print"class="alert btn-danger"></td></tr>
</table></form></div>
<?php
	}
	else
	{?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>
<?php include_once("footer.php");?>