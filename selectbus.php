<?php include_once("header.php");
if(isset($_SESSION["adminid"]))
	{
?>
<br><br><br><br><br><br>
<div align="center">
          <?php
			  $busfrom=$_GET['busfrom'];
			  $busto=$_GET['busto'];
			  $date=$_GET['date'];
			  $_SESSION['busfrom']=$busfrom;
			  $_SESSION['busto']=$busto;
			  $_SESSION['date']=$date;
			?>

          <form method="post" onSubmit="return validroute(this);" action="selectseat.php">
          <table width="100%">
          <tr>
          <td align="center">AVAILABLE BUSES</td>
          </tr>
          <tr>
          <td align="center">
            <select name="selbus" id="selbus"class="form-control"required>
            <option value=0 disabled>NO Bus Selected</option>
             <?php echo getbuslist($busfrom,$busto,$date);?>
            </select></td>
          </tr>          
        <?php if(isset($_SESSION['custid']))
		{?>
          <tr align="center">
          <td><input type="submit" class="alert btn-success" name="bookseat" id="bookseat" value="book seat"></td>
          </tr>
         <?php }else{ ?> 
          <tr align="center">
          <td><input type="submit" name="showseat"class="alert btn-success" id="showseat" value="show seat"></td>
          </tr>
          <?php }?>
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
include_once("footer.php");?>