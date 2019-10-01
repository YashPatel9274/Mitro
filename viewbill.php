<?php 
include_once("header.php"); 
$sql="select * from bill order by billid;";
$rs=mysql_query($sql) or die(mysql_error());	
?>

<br><br><br><br><br>
<?php	if(isset($_SESSION["adminid"]))
	{ if(isset($_SESSION['custid']))
unset($_SESSION['custid']);?>

<table class="table table-hover table-bordered" border="3"width="1100"align="center">
  <tr>
    <th><div align="center">BILLS</div></th>
  </tr>
</table>
  <?php while($data=mysql_fetch_assoc($rs))
{
	echo"
<br><div id='print'>
<table class='table table-hover table-bordered'border=3 width=1100 align=center>
  <tr>
    <th  align=center>BILL NO</th>
    <td align='center'>".$data['billid']."</td>
    <th align=center>ADMIN ID</th>
    <td align='center'>".$data['adminid']."</td>
  </tr>
  <tr>
    <th  align=center>CUST ID</th>
<td align='center'>".$data['custid']."</td>
  <th align=center>BUS ID</th>
    <td align='center'>".$data['busid']."</td>
    
  </tr>
  <tr>
    <th align=center>FROM</th>
<td align='center'>".$data['busfrom']."</td>
    <th align=center>TO</th>
<td align='center'>".$data['busto']."</td>
  </tr>
  <tr>
    <th align=center>ON DATE</th>
<td align='center'>".$data['ondate']."</td>
    <th align=center>BILL DATE</th>
<td align='center'>".$data['billdate']."</td>
  </tr>
  <tr>
    <th align=center> TIME START</th>
<td align='center'>".$data['timestart']."</td>
    <th align=center>SEAT NO</th>
<td align='center'>".$data['seatno']."</td>
  </tr>
  <tr>
    <th align=center>BUS TYPE</th>
<td align='center'>".$data['bustype']."</td>
    <th align=center>PRICE</th>
<td align='center'>".$data['price']."</td>
  </tr>
  <tr align='center'>
  <td colspan='4'>
<input type='button' name='Print'  onclick='window.printa(this)' id='Print' value='Print'class='alert btn-danger'>
  </td>
</tr>
</table></div><br><br><br><br><br><br>";
}?>
<script>
function printa(obj)
{
	var pri=document.getElementById("print");
	var win=window.open('','print','','');
	win.document.write(pri.innerHTML);
	win.document.close();
	win.focus();
	win.print() ;
	win.close();
}
</script>
<?php
	}
	else
	{
		?><script>alert('Login Please');
    window.location.href="login.php";
    </script>
	<?php
	}
?>
<?php 
include_once("footer.php");?>