<?php

	class plantilla{

		static $instancia;

		static function inicio(){
			self::$instancia = new plantilla();
		}


		function __construct(){
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>ZBank</title>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
			
			<script src="https://use.fontawesome.com/4d3637b14b.js"></script>
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="styleesheet">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
			<!--Animate css-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
			<!--End of animate css-->

			<link type="text/css" href="<?php  echo base_url('Content')?>/css/main.css" rel="stylesheet">
			<script type="text/javascript" src="<?php  echo base_url('Content')?>/js/script.js"></script>
			<link rel="shortcut icon" href="<?php  echo base_url('Content')?>/Img/favicon.icon" type="image/x-icon">
			<link rel="icon" href="<?php  echo base_url('Content')?>/Img/favicon.ico" type="image/x-icon">
		</head>
		<body>
			<nav class="navbar navbar-toggleable-md navbar-inverse bg-faded" style="background-color: #232F3E;">
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo site_url('home')?>">
			    <img src="<?php  echo base_url('Content')?>/Img/logo.jpg" width="30" height="30" style="border-radius: 50%" class="d-inline-block align-top" alt="">
			    ZBank
			  </a>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo site_url('home')?>">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			    	<li class="nav-item"><a class="nav-link" href="#">Cuenta</a></li>
			    </ul>
			  </div>
			</nav>
			<div class="container-fluid">
			
		
	<?php
		}

		function __destruct(){
	?>
			
			</div>
			<footer style="background-color: #232F3E; color: white;">
			    <div class="footer" id="footer" >
			        <div class="container">
			            <div class="row pt-2 pb-2">
			                <div class="col-xs-4">
			                	<h4 class="text-center footer-heading"><b>Contacto</b></h4>
			                	<p class="footer-text"><i class="fa fa-phone"></i> 809-699-2487</p>
			                </div>
			            </div>
			            <!--/.row--> 
			        </div>
			        <!--/.container--> 
			    </div>
			    <!--/.footer-->
			    
			    <div class="footer-bottom" style="background-color: #131A22">
			        <div class="container">
			            <p class="text-center"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
			        </div>
			    </div>
			    <!--/.footer-bottom--> 
			</footer>
		</body>
		</html>
	<?php
		}
	}