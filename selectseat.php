<style>
.bus{text-align:center;width:100%;height:420px;float:left; }
.seat{background:#CCC; cursor:pointer;float:left;margin:20px 20px 0 0;}
.cancel_book{background:#CCC;}
.green{background:green;}
.red{background:red;}
</style>
<?php include_once("header.php"); ?>
<br><br><br><br><br>
<?php	if(isset($_SESSION["adminid"]))
	{
	if(isset($_POST['bookseat']))
	{
		$dd=date('Y-m-d');
		if($_SESSION['date']>=$dd)
		{

		$selbus=$_POST['selbus'];
		$selbus=explode(',',$selbus);
		$busid=$selbus[0];
		$busfrom=$selbus[1];
		$busto=$selbus[2];
		$timestart=$selbus[3];
		$bustype=$selbus[4];
		$priceprst=$selbus[5];
		$seat=array();
		$seat=$selbus[6];
		$dt=$selbus[7];
		$_SESSION['busid']=$busid;
		$_SESSION['timestart']=$timestart;
		$_SESSION['bustype']=$bustype;
		$_SESSION['priceprst']=$priceprst;
		$_SESSION['seat']=$seat;
		$_SESSION['dt']=$dt;
		?>
<script> 
$(document).ready(
function()
{
  var fruits = [];
  $(".seat").click(
  function()
  {
	var total_class = $('.green').length;
	var book_seat = $(this).attr("data-book"); 
	var current_book = $(this).attr("data-current"); 
	if(current_book == 1 )
	{	
	  var seat_no = $(this).attr("data-number");
	  $(this).removeClass('green');	
	  $(this).removeAttr('data-current');		
	  fruits.splice( fruits.indexOf(seat_no), 1 );
	  $(".book_seats").val(fruits);	
	  return true;
	}	  
	else if(book_seat == 1)
	{	
	  alert("Already booked");
	  return false;
	}	
	else 
	{ 	
	  var seat_no = $(this).attr("data-number");
	  fruits.push(seat_no);
	  $(".book_seats").val(fruits);
	  $(this).attr('data-current', '1');
	  $(this).addClass('green');	
	  return true;
	}	
  });
});
</script> 
<form method="post" onSubmit="return validroute(this);" action="custbill.php">         
<span class="bus">
    <?php 
	$booked_seat[]=explode("-",$seat);
		$booked_seat=$booked_seat[0];
	  $_SESSION['seat']=$booked_seat;
	  
	  for($seat= 1; $seat <=40 ;$seat++) 
	  { 
		if(in_array($seat,$booked_seat))
		{ 
		  $booked="red"; $book_seat="data-book='1'"; 
		}
		else 
		{ 
		  $booked=""; 
		  $book_seat="";
		}
		echo "<div class='seat $booked' data-number=' $seat'$book_seat >Seat No:-$seat<br>
		<img src='images/seat.png 'width='110' height='60'></div>";
	  } 
    ?>
    </span>
    <center>	Seat No :<input type="text" name="seats" id="seats" class="book_seats form-control"required></center><br>
	
	<center><input class="alert btn-success" type="submit" value="book"  id="book"></center>

</form>


<?php
	}else{
	?>
    <script>
	alert("You Entered Wrong Date Please Try Again...");
	window.location.href="setroute.php";
	</script>
    <?php
	}}
	if(isset($_POST['showseat']))
	{
		$seat=array();
		$selbus=$_POST['selbus'];
			$selbus=explode(',',$selbus);
		$seat=$selbus[6];
	?> 
<form method="post"  action="index.php">         
<span class="bus">
    <?php
	
	  $booked_seat[]=explode("-",$seat);
		$booked_seat=$booked_seat[0];
	  $_SESSION['seat']=$booked_seat;
	  for($seat= 1; $seat <=40 ;$seat++) 
	  { 
		if(in_array($seat,$booked_seat))
		{ 
		  $booked="red"; $book_seat="data-book='1'"; 
		}
			else 
		{ 
		  $booked=""; 
		  $book_seat="";
		}
		echo "<div class='seat $booked' data-number=' $seat'$book_seat >Seat No:-$seat<br>
		<img src='images/seat.png 'width='110' height='60'></div>";
	  } 
    ?>
    </span>
<center>    <input type="submit" class="alert btn-danger" value="Ok"  id="Ok"></center>

</form>
        
<?php	}
	}
	else
	{
?><script>alert('please login first');
    window.location.href="login.php";
    </script>
	<?php 	}
?>
<?php include_once("footer.php");?>