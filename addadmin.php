<?php include_once("header.php"); ?>
<br><br><br><br><br>

<form onSubmit="return validadmin(this);" enctype="multipart/form-data" name="addadmin" method="post"  action="admin.php">
<table class="table table-hover table-bordered"  width="400" border="5" align="center">
<tr>
<th colspan="2" scope="col"><div align="center">REGISTER</div></th>
</tr>
<tr>
<td width="214"><div align="center">ADMIN ID</div></td>
<td width="162"><div align="center">
<input type="text" name="adminid" id="adminid" class="form-control"maxlength="12" onKeypress="goods='0123456789'; return limitchar(event);" required>

</div></td> 
</tr>
<tr>
<td><div align="center">ADMIN NAME</div></td>
<td><div align="center">
<input type="text" name="adminname" id="adminname"class="form-control"maxlength="20" onKeypress="goods=' abcdefghijklmnopqrstuvwxyz'; return limitchar(event);"required>
</div></td>
</tr>
<tr>
<td><div align="center">ADMIN ADDRESS</div></td>
<td><div align="center">
<input type="text"required name="adminaddr" id="adminaddr" maxlength="50"class="form-control"onKeypress="goods='0123456789-/+,.&*()\[]{}` abcdefghijklmnopqrstuvwxyz'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN MOBILENO</div></td>
<td><div align="center">
<input type="text"required name="adminmob" id="adminmob"class="form-control" maxlength="10"onKeypress="goods='0123456789'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN MAIL</div></td>
<td><div align="center">
<input type="text" name="adminmail"required id="adminmail"class="form-control"maxlength="50"onKeypress="goods='0123456789abcdefghijklmnopqrstuvwxyz@.'; return limitchar(event);">

</div></td>
</tr>
<tr>
<td><div align="center">ADMIN&nbsp;PASSWORD</div></td>
<td><div align="center">
<input type="password" name="adminpsswrd"required class="form-control" maxlength="20"id="adminpsswrd">

</div></td>
</tr>
<tr>
<td colspan="2"><div align="center">
<input type="submit" name="submit" class="alert btn-default" value="submit" id="submit">

<input type="reset" name="reset" class="alert btn-danger" id="reset" value="reset">
</div></td>
</tr>

</table> 

</form>
<?php include_once("footer.php");?>
