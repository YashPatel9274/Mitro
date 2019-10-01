<?php include_once("header.php"); 
if(isset($_SESSION['custid']))
unset($_SESSION['custid']);
?>
<div id="home-sec">   

    <div class="row text-center">
      <div  class="col-md-12" >
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <div align="center"><img src="img/1.jpg" alt="" height="500"/>
              </div>
            </div>
            <div class="item">
              <div align="center"><img src="img/2.jpg" alt="" height="500" />
              </div>
            </div>
            <div class="item">
              <div align="center"><img src="img/3.jpg" alt="" height="500"/>
              </div>
            </div>
            <div class="item">
              <div align="center"><img src="img/4.jpg" alt="" height="500"/>
              </div>
            </div>   
          </div>
        </div>    
      </div>
    </div>
  
</div>

	<div class="row text-center">
		<span class="line-sep ">
		---------X------------X----------X-------------
		</span>
	</div>


<section  id="projects">	
	<div class="row text-center">
		<div class="text-left">
		<h4><center>WELCOME</center></h4><br>
		<div class="col-md-7 text-center">
			  <img class="img-responsive" src="img/welcome.jpg" alt="">
		</div>
<?php 
if(isset($_SESSION["adminid"]))
{ ?>                    
		<div class="col-md-3  text-center">	
			<p>First you need to add Customer Details then you can go for booking by pressing "GO FOR BOOKING..."
			</p> 
			<br><br><br><br><br><br><br>                        <br><br><br><br><br><br><br>                       
				<div class="project-cls">
				<a href="addcust.php"><span class="badge">GO FOR BOOKING...<i class="fa fa-arrow-right"></i></span></a>  
				</div>
		</div>
<?php }
else
{ ?>
		<div class="col-md-3 text-center">	
			<p>First you need to LOGIN first by pressing "LOGIN HERE..." then you can add Customer Details then you can go for booking by pressing "GO FOR BOOKING..."
			</p> 
			<br><br><br><br><br><br><br>                        <br><br><br><br><br><br><br>                       
				<div class="project-cls">
				<a href="login.php"><span class="badge">LOGIN HERE...<i class="fa fa-arrow-right"></i></span></a>  
				</div>
		</div>
<?php } ?>
		</div>
	</div>
</section>
<div class="container">
	<div class="row text-center">
		<span class="line-sep ">
		----------X------------X----------X-------------
		</span>
	</div>
</div>
<?php include_once("footer.php"); ?>