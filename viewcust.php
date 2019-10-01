<?php 
include_once("header.php"); 
if(isset($_SESSION["adminid"]))
	{if(isset($_SESSION['custid']))
unset($_SESSION['custid']);
$sql="select * from customer order by custid;";
$rs=mysql_query($sql) or die(mysql_error());	
?>

<br><br><br><br><br>
<div id='print'>
<form action='addcust.php'>
<table width="1000" class="table table-hover table-bordered" border="5" align="center">
  <tr>
    <td align="center">CUSTOMER DETAILS</td>
    <td align="center"><input type='submit' class='alert btn-primary' value='ADD CUSTOMER'></td>
  </tr>
</table>
<table width="1000" class="table table-hover table-bordered" border="3" align="center">
  <tr>
    <th scope="col"><div align="center">CUSTOMER ID</div></th>
    <th scope="col"><div align="center">CUSTOMER NAME</div></th>
    <th scope="col"><div align="center">CUSTOMER ADDRESS</div></th>
    <th scope="col"><div align="center">CUSTOMER MOBILENO</div></th>
    <th scope="col"><div align="center">CUSTOMER MAIL</div></th>
  </tr>
   <?php while($data=mysql_fetch_assoc($rs))
   { 
   echo"<tr><td align='center'>".$data['custid']."</td>
    <td align='center'>".$data['custname']."</td>
    <td align='center'>".$data['custaddr']."</td>
    <td align='center'>".$data['custmob']."</td>
    <td align='center'>".$data['custmail']."</td></tr>";}?>
    <tr><td align="right" colspan="5"><input type='button' name='Print'  onclick='window.print(print)' id='Print' value='Print'class='alert btn-danger'></td></tr>
</table></form></div>
<?php
	}
	else
	{?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php }
?>
<?php include_once("footer.php");?>