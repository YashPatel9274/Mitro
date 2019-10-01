<?php	include_once("header.php");
if(isset($_SESSION["adminid"]))
{ ?>

<br><br><br><br>
<?php
	$nseat=array();
	$seat=array();
	$dt=$_SESSION['dt'];
	$seat=$_SESSION['seat'];
	$nseat=$_POST['seats'];
	$nseat=explode(",",$nseat);
	$nseat=array_values($nseat);
		$tst=count($nseat);
	$seat=array_unique(array_merge($seat,$nseat));
	$_SESSION['nseat']=$nseat;
	$priceprst=$_SESSION['priceprst'];
	$total= $priceprst * $tst;
	$_SESSION['total']=$total;
	if($dt==0)
	{
		$sql="insert into route values ('".$_SESSION['busid']."','".$_SESSION['busfrom']."','".$_SESSION['busto']."','".$_SESSION['bustype']."','".$_SESSION['priceprst']."','".$_SESSION['timestart']."','".$_SESSION['date']."','".implode("-",$seat)."');";
		$rs=mysql_query($sql) or die(mysql_error());	
		if($rs!=0)
		{
			 ?>
  		   <script>alert("NEW Route Inserted");</script>
  		   <?php 
		}   
	}
	else
	{
		$sql="update route set seat='".implode("-",$seat)."' where busid='".$_SESSION['busid']."' and busfrom='".$_SESSION['busfrom']."' and busto='".$_SESSION['busto']."' and bustype='".$_SESSION['bustype']."'and priceprst='".$_SESSION['priceprst']."'and timestart='".$_SESSION['timestart']."' and date='".$_SESSION['date']."';";
		$rs=mysql_query($sql) or die(mysql_error());	
			 ?>
		     <script>alert("NEW Route Updated");</script>
    		 <?php

	}
	?>
	<form method="post" action="bill.php">
	<?php
	echo" <br><div id='print'>
<table class='table table-hover' width=1000 align=center>
  <tr>
    <th align=center>ADMIN ID</th>
    <td align='center'>".$_SESSION['adminid']."</td>
    <th align=center>CUST ID</th>
<td align='center'>".$_SESSION['custid']."</td>
  </tr>
  <tr>
  <th align=center>BUS ID</th>
    <td align='center'>".$_SESSION['busid']."</td>
    <th align=center>PRICE</th>
<td align='center'>".$_SESSION['priceprst']."</td>
  </tr>
  <tr>
    <th align=center>FROM</th>
<td align='center'>".$_SESSION['busfrom']."</td>
    <th align=center>TO</th>
<td align='center'>".$_SESSION['busto']."</td>
  </tr>
  <tr>
    <th align=center>ON DATE</th>
<td align='center'>".$_SESSION['date']."</td>
    <th align=center> TIME START</th>
<td align='center'>".$_SESSION['timestart']."</td>
  </tr>
  <tr>
    <th align=center>BUS TYPE</th>
<td align='center'>".$_SESSION['bustype']."</td>
    <th align=center>SEAT NO</th>
<td align='center'>".implode("-",$nseat)."</td>
  </tr>
  <tr >
	<th align=center colspan='2'>Total Price Of Seats</th>   
<td align='center'colspan='2'>".$total."</td>
</tr>

<tr >
  <td colspan='3'>
  <input type='button' name='Print' value='Print' onclick='window.print(print)' id='Print' class='alert btn-danger '>    
  </td>
  <td >
  <input type='submit' name='ok' value='Save This Bill' id='ok' class='alert btn-success'>    
  </td>
</tr>
</table></div>";
?>

    </form>

<?php	
}
else
{
	?>
	<script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 
}
?>
<?php include_once('footer.php');?>