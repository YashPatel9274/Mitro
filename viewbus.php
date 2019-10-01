<?php 
include_once("header.php");
if(isset($_SESSION["adminid"]))
	{if(isset($_SESSION['custid']))
unset($_SESSION['custid']);  
$sql="select * from bus order by busid;";
$rs=mysql_query($sql) or die(mysql_error());	
?>

<br><br><br><br><br>
<div id='print'>
<form action='addbus.php'>
<table class="table table-hover table-bordered" width="1000" border="5" align="center">
  <tr>
    <td align="center">BUS &amp;&nbsp;DRIVER DETAILS</td>
    <td align="center"><input type='submit' class='alert btn-primary' value='ADD DRIVER & BUS'></td>
  </tr>
</table>

<table class="table table-hover table-bordered"width="1000" border="3" align="center">
  
  <tr>
  <th scope="col"><div align="center">DRIVER ID</div></th>
    <th scope="col"><div align="center">DRIVER NAME</div></th>
    
    <th scope="col"><div align="center">DRIVER MOBILENO</div></th>
    <th scope="col"><div align="center">DRIVER MAIL</div></th>
    <th scope="col"><div align="center">DRIVER SALARY</div></th>
    <th scope="col"><div align="center">BUS ID</div></th>
    <th scope="col"><div align="center">BUSFROM</div></th>
    <th scope="col"><div align="center">BUSTO</div></th>
    <th scope="col"><div align="center">TIMESTART</div></th>
    <th scope="col"><div align="center">BUSTYPE</div></th>
    <th scope="col"><div align="center">PRICEPERSEAT</div></th>
    

  </tr>
  <?php while($data=mysql_fetch_assoc($rs)){
	  echo" 
<tr>
    <td align='center'>".$data['driverid']."</td>
    <td align='center'>".$data['drivername']."</td>
    <td align='center'>".$data['drivermob']."</td>
    <td align='center'>".$data['drivermail']."</td>
	<td align='center'>".$data['driversalary']."</td>
<td align='center'>".$data['busid']."</td>
<td align='center'>".$data['busfrom']."</td>
<td align='center'>".$data['busto']."</td>
<td align='center'>".$data['timestart']."</td>
<td align='center'>".$data['bustype']."</td>
<td align='center'>".$data['priceprst']."</td>
</tr> ";}?>
<tr><td align="right" colspan="11"><input type='button' name='Print'  onclick='window.print(print)' id='Print' value='Print'class='alert btn-danger'></td></tr>
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