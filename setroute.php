 <?php include_once("header.php"); ?>
<br><br><br><br><br>
<?php	if(isset($_SESSION["adminid"]))
	{ 
	?>
    <script type="text/javascript">
function getto(str)
{
	var obj= new XMLHttpRequest();
    obj.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status == 200)
        {
            document.getElementById("busto").innerHTML=this.responseText;
        }
    };
    obj.open("GET","getto.php?q="+str,true);
    obj.send();
}
</script>

    <br><br><br>
      <div align="center">
        <form method="get" onSubmit="return validroute(this);" action="selectbus.php">
          <table width="100%" align="center">
          <tr>
          <td colspan="3" align="center">SELECT ROUTE &amp; DATE</td>
          </tr>
          <tr>
          <td width="300">FROM:</td>
          <td width="300">TO:</td>
          <td width="300">Date:</td>
          </tr>
          <tr>
          <td width="300">
            <select name="busfrom" class="form-control"id="busfrom" required onChange="getto(this.value);">
             <?php echo getoptionlist("bus","busfrom","busfrom");?>
            </select></td>
          <td width="300">
            <select name="busto" id="busto"class="form-control"required>
            </select></td>
          <td width="300"> 
    <input type="date" id="date" name="date"class="form-control"required></td>
          </tr>
          <tr align="center">
          <td colspan="3"><input type="submit" name="submit" id="submit" value="submit"class="alert btn-default">
            <input type="reset" name="reset" id="reset" value="reset"class="alert btn-success"></td>
          </tr>
          </table>
	    </form>
    </div>
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