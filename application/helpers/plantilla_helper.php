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

			<link type="text/css" href="<?php  echo base_url('Content')?>/css/main2.css" rel="stylesheet">
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
			  	<?php
			        		$CI =& get_instance(); 
	  								$isLoggedIn = $CI->session->userdata('isUserLoggedIn');
		                    		if($isLoggedIn){
		                    			echo '<ul class="nav navbar-nav navbar-toggler-right">
		                    					<a class="btn btn-danger" href="'. site_url('users/logout') .'">Salir <span class="sr-only">(current)</span></a>
		                    			</ul>';
		                    		}
			        	?>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo site_url('home')?>">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			    <ul class="navbar-nav">
			    	<li class="dropdown active">
		          <a  <?php
		                    		$CI =& get_instance(); 
	  								$isLoggedIn = $CI->session->userdata('isUserLoggedIn');
	  								
		                    		if($isLoggedIn){
		                    			echo 'href="' . site_url('users/account') . '"  class="nav-link"';
		                    		}else{
		                    			echo 'id="loginactivator" href="#"  class="nav-link dropdown-toggle" data-toggle="dropdown"';
		                    		}
	                    		?>><i class="fa fa-user" aria-hidden="true"></i> Cuenta <span class="caret"></span></a>
					<?php
	                    		$CI =& get_instance(); 
	                    		$msg = $CI->session->userdata('error_msg');
	  							$isLoggedIn = $CI->session->userdata('isUserLoggedIn');
		                    	if($isLoggedIn){
		                    		
		                    	}else{
		                    		$attributes = array("class" => "form","name" => "loginForm", "id" => "login-nav", "role" => "form", "method" => "post", "accept-charset" => "UTF-8");
		                    		echo'<ul id="login-dp" class="dropdown-menu">
						<li>
							 <div class="row">
									<div class="col-md-12">'.$msg.'
										Inicia sesión'. form_open('users/login',$attributes).'<div class="form-group">
													 <label class="sr-only" for="username">Nombre de usuario</label>
													 <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario" required>
												</div>
												<div class="form-group">
													 <label class="sr-only" for="password">Contraseña</label>
													 <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
		                                             <div class="help-block text-right"><a href="">Olvidaste la contraseña ?</a></div>
												</div>
												<div class="form-group">
													 <button type="submit" name="loginSubmit" value="send"  class="btn btn-primary btn-block">Ingresa</button>
												</div>'.form_close().'</div>
									<div class="bottom text-center">
										Eres nuevo ? <a href="'.site_url('users/registration').'"><b>Unete</b></a>
									</div>
							 </div>
						</li>
			    	</ul>';
		                    		}?>

			    	</li>
			    </ul>
			  </div>
			</nav>
			<div id="wrap">
			<div class="container-fluid pb-5 mb-5">
			
		
	<?php
		}

		function __destruct(){
	?>
			
			</div>
			<div id="push"></div>
			</div>

			    <div class="footer " id="footer" style="background-color: #232F3E; color: white;">
			        <div class="container">
			            <div class="row pt-2 pb-2">
			                <div class="col-sm-4 offset-sm-2">
			                	<h4 class=" footer-heading"><b>Contacto</b></h4>
			                	<ul>
			                	<li class="footer-text"><i class="fa fa-phone"></i> 809-699-2487</li>
			                	<li class="footer-text"><i class="fa fa-envelope"></i> zbank@gmail.com</li>
			                	<li><a class="footer-link" href="#"><i class="fa fa-question"></i> Formulario de contacto</a></li>
			                	</ul>
			                </div>
			                <div class="col-sm-4 offset-sm-2">
			                	<h4 class="footer-heading"><b>Redes</b></h4>
			                	<ul class="social-network social-circle">
		                            <li><a href="#" class="rubber-hover icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
		                            <li><a href="#" class="rubber-hover icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
		                            <li><a href="#" class="rubber-hover icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
			                    </ul>
			                </div>
			            </div>
			            <div class="row pt-2 pb-2">
			           		<div class="col-sm-12">
			           			<p class="text-center"> Copyright © ZBank 2017. </p>
			           		</div>
			            	
			            </div>
			            <!--/.row--> 
			        </div>
			        <!--/.container--> 
			    </div>
			    <!--/.footer-->
			    
		</body>
		</html>
	<?php
		}
	}