<?php include_once("header.php"); ?>
<br><br><br><br><br>
<?php	if(isset($_SESSION["adminid"]))
	{ ?>

<form onsubmit="return validbus(this);" name="addbus" method="post" action="bus.php">
<table class="table table-hover table-bordered"  width="500" height="379" border="5" align="center">
<tr>
<th colspan="2" scope="col"><div align="center">BUS & DRIVER DETAILS</div></th>
</tr>
<tr>
    <td width="214"><div align="center">DRIVER ID</div></td>
    <td width="179"><div align="center">
      <input type="text"required name="driverid" maxlength="12" id="driverid"class="form-control"  onKeypress="goods='0123456789'; return limitchar(event);">

    </div></td>
  </tr>
  <tr>
    <td><div align="center">DRIVER NAME</div></td>
    <td><div align="center">
      <input type="text"required name="drivername" id="drivername"maxlength="20" class="form-control" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">
      
    </div></td>
  </tr>
  <tr>
    <td><div align="center">DRIVER MOBILENO</div></td>
    <td><div align="center">
      <input type="text"required name="drivermob" id="drivermob"class="form-control" maxlength="10" onKeypress="gooods='0123456789'; return limitchar(event)">
      
      </div></td>
  </tr>
  <tr>
    <td><div align="center">DRIVER MAIL</div></td>
    <td><div align="center">
      <input type="text"required name="drivermail"class="form-control"  id="drivermail"maxlength="30" onKeypress="goods='0123456789 abcdefghijklmnopqrstuvwxyz@.'; return limitchar(event);">
    
    </div></td>
  </tr>
  
  <tr>
    <td><div align="center">DRIVER SALARY</div></td>
    <td><div align="center">
      <input type="text"required name="driversalary" class="form-control"  id="driversalary" maxlength="5"onKeypress="gooods='0123456789'; return limitchar(event)">
      
    </div></td>
  </tr>
<tr>
<td width="214"><div align="center">BUS ID</div></td>
<td width="179"><div align="center">
<input type="text"class="form-control"required name="busid" id="busid" maxlength="10"onKeypress="goods='0123456789abcdefghijklmnopqrstuvxyz-'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">BUSFROM</div></td>
<td><div align="center">
<input type="text" name="busfrom"required class="form-control"id="busfrom"maxlength="10" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">BUSTO</div></td>
<td><div align="center">
  <input type="text" name="busto"required id="busto"class="form-control"maxlength="10" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">
</div></td>
</tr>
<tr>
<td><div align="center">TIMESTART</div></td>
<td><div align="center">
<input type="time" name="timestart"required id="timestart"class="form-control">

</div></td>
</tr>
<tr>
<td><div align="center">BUSTYPE</div></td>
<td><div align="center">
  <input name="bustype" type="radio" class="radio-inline" id="AC SLEEPER"  value="AC SLEEPER" >AC SLEEPER
  <input name="bustype" type="radio" class="radio-inline" id="NONAC SLEEPER" value="NONAC SLEEPER">NONAC SLEEPER<br>
  <input name="bustype" type="radio" class="radio-inline" id="AC SEETER" value="AC SEETER">AC SEETER
  <input name="bustype" type="radio" class="radio-inline" id="NONAC SEETER" value="NONAC SEETER">NONAC SEETER
</div></td>
</tr>
<tr>
<td><div align="center">PRICEPERSEAT</div></td>
<td><div align="center">
<input type="text"required name="priceprst" id="priceprst"class="form-control" maxlength="4"onKeypress="goods='0123456789'; return limitchar(event);">

</div></td>
</tr>

<tr>
  <td colspan="2"><div align="center">
  <input type="submit" name="submit" value="submit" id="submit" class="alert btn-default">
    
  <input type="reset" name="reset" id="reset" value="reset" class="alert btn-danger">
  </div></td>
</tr>

</table>
</form>
<?php
	}
	else
	{
?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>
<?php include_once("footer.php");?>