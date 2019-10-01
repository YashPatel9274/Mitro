<?php include_once("header.php"); ?>
<br><br><br><br><br><br><br><br><br><br>
<form onSubmit="return loginadmin(this);" enctype="multipart/form-data" name="addadmin" method="post"  action="verify.php">
<table class="table table-hover table-bordered"  width="400" border="5" align="center">
<tr>
<th colspan="2" scope="col"><div align="center">LOGIN</div></th>
</tr>
<tr>
<td width="214"><div align="center">ADMIN ID</div></td>
<td width="162"><div align="center">
<input type="text" name="adminid" class="form-control"required id="adminid" maxlength="12" onKeypress="goods='0123456789'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN&nbsp;PASSWORD</div></td>
<td><div align="center">
<input type="password" name="adminpsswrd"required class="form-control"id="adminpsswrd"maxlength="20">

</div></td>
</tr>
  <tr>
    <td colspan="2" align="center"><input class="btn btn-default" type="submit" name="login" id="login" value="login">
    <a href="addadmin.php"><div class="btn btn-info" name="signup" id="signup" value="signup">signup</div></a></td>
  </tr>

</table> 

</form>
<?php include_once("footer.php");?>