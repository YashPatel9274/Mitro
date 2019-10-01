<!DOCTYPE html>
<?php
include_once("dbconnect.php");
include_once("function.php");
?>
<html>
    <head>
        <title>WELCOME TO MITRO</title>
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/valid.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.js"></script> 
		</head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                    </button>
                    <a class="navbar-brand" href="index.php">MITRO</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav navbar-right">
<?php 
if(isset($_SESSION["adminid"]))
{                   ?> 
                    <li><a href='viewadmin.php'><button class='btn btn-info'>ADMIN</button></a></li>
                    <li><a href='viewbus.php'><button class='btn btn-info'>BUS</button></a></li>
                    <li><a href='viewcust.php'><button class='btn btn-info'>CUSTOMER</button></a></li>
                    <li><a href='setroute.php'><button class='btn btn-info'>VIEW ROUTE</button></a></li>
                    <li><a href='viewbill.php'><button class='btn btn-info'>BILLS</button></a></li>
                    <li><a href='logout.php'><button class='btn btn-danger' name='logout' id='logout'>LOGOUT</button></a></li>
<?php }
else
{
?>
	<li><a href='login.php'><button class='btn btn-default'>LOGIN</button></a></li>
<?php } ?>
                    </ul>
                </div>
            </div>
        </div>