<?php include_once("header.php"); ?>
<br><br><br><br><br>
<?php	if(isset($_SESSION["adminid"]))
	{ ?>

<form onsubmit="return validcust(this);" name="addcust" method="post" action="cust.php">
<table class="table table-hover table-bordered" width="400" border="5" align="center">
  <tr>
    <th colspan="2" scope="col"><div align="center">CUSTOMER DETAILS</div></th>
  </tr>
  <tr>
    <td width="214"><div align="center">CUSTOMER ID</div></td>
    <td width="162"><div align="center">
      <input type="text"required name="custid" id="custid"class="form-control" maxlength="12"onKeypress="goods='0123456789'; return limitchar(event);">

    </div></td>
  </tr>
  <tr>
    <td><div align="center">CUSTOMER NAME</div></td>
    <td><div align="center">
      <input type="text"required name="custname" id="custname" class="form-control"maxlength="20"onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">
      
    </div></td>
  </tr>
  <tr>
    <td><div align="center">CUSTOMER ADDRESS</div></td>
    <td><div align="center">
      <input type="text" name="custaddr"required id="custaddr" maxlength="50" class="form-control" onKeypress="goods='0123456789-/+,.&*()\[]{}` abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">
      
    </div></td>
  </tr>
  <tr>
    <td><div align="center">CUSTOMER MOBILENO</div></td>
    <td><div align="center">
      <input type="text" name="custmob"required id="custmob" class="form-control" maxlength="10"onKeypress="goods='0123456789'; return limitchar(event);">
      
    </div></td>
  </tr>
  <tr>
    <td><div align="center">CUSTOMER MAIL</div></td>
    <td><div align="center">
      <input type="text" name="custmail"required id="custmail"class="form-control"maxlength="30"onKeypress="goods='0123456789 abcdefghijklmnopqrstuvwxyz@.'; return limitchar(event);">
    
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
<input type="submit" name="submit" value="submit" id="submit" class="alert btn-default">
      
      <input type="reset" class="alert btn-danger" name="reset" id="reset" value="reset">
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
