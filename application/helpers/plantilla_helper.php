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
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
			<script src="https://use.fontawesome.com/4d3637b14b.js"></script>
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="styleesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
			<!--Animate css-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
			<!--End of anumate css-->
			<!--bxSlider-->
			<link type="text/css" href="<?php  echo base_url('Content')?>/css/jquery.bxslider.min.css" rel="stylesheet">
			<script type="text/javascript" src="<?php  echo base_url('Content')?>/js/jquery.bxslider.min.js"></script>
			
			<!---->

			<link type="text/css" href="<?php  echo base_url('Content')?>/css/style2.css" rel="stylesheet">
			<script type="text/javascript" src="<?php  echo base_url('Content')?>/js/script.js"></script>
			<link rel="shortcut icon" href="<?php  echo base_url('Content')?>/Img/favicon.ico" type="image/x-icon">
			<link rel="icon" href="<?php  echo base_url('Content')?>/Img/favicon.ico" type="image/x-icon">
			
			<style>
				
			</style>
		</head>
		<body>
			<div class="container" style="height: 80px" >

				<nav class="navbar navbar-default navbar-custom">

			        <div class="nav nav-justified navbar-nav">
			        	<a class="navbar-brand" href="<?php echo site_url('home')?>" ><img src="<? echo base_url('Content')?>/Img/logo.png"  style="position: relative; z-index: 1;border: 1px solid #E7E7E7; margin-top: -7;" width="100" height="100	" /></a>
			        	<ul class="nav navbar-nav">
			        		<li><a href="<?php echo site_url('home')?>"><b>Inicio</b></a></li>
			        		<li><a href="<?php echo site_url('home/nosotros')?>"><b>Nosotros</b></a></li>
			        		<li class="dropdown">
			        			<a href="#" data-toggle="dropdown" class="dropdown-toggle"><b>Categorías</b><span class="caret"></span></a>
			        			<ul class="dropdown-menu">
								    <li><a href="#"><b>Bicicletas</b></a></li>
								    <li><a href="#">Carretera</a></li>
								    <li><a href="#">BMX</a></li>
								    <li><a href="#">Urbana</a></li>
								    <li><a href="#">Playera</a></li>
								    <li><a href="#">Infantil</a></li>
								    <li><a href="#">Otra</a></li>
								    <li class="divider"></li>
								    <li><a href="#"><b>Partes</b></a></li>
								    <li class="divider"></li>
								    <li><a href="#"><b>Accesorios</b></a></li>
								</ul>
			        		</li>
			        	</ul>
			        	<ul class="nav navbar-nav navbar-right">
			        		<!--Dropdown login-->
			        		<li class="dropdown">
			        		<!-- Si el usuario está logueado envia a inicio, de lo contrario, muestra login-->
					          <a <?php
		                    		$CI =& get_instance(); 
	  								$isLoggedIn = $CI->session->userdata('isUserLoggedIn');
		                    		if($isLoggedIn){
		                    			echo 'href="' . site_url('usuario/index') . '"';
		                    		}else{
		                    			echo 'href="#"  class="dropdown-toggle" data-toggle="dropdown"';
		                    		}
	                    		?> ><span class="glyphicon glyphicon-user"></span><b>Cuenta</b></a>
	                    		
	                    		<?php
	                    		$CI =& get_instance(); 
	  							$isLoggedIn = $CI->session->userdata('isUserLoggedIn');
		                    	if($isLoggedIn){
		                    		
		                    	}else{
		                    		$attributes = array("class" => "form","name" => "loginForm", "id" => "login-nav", "role" => "form", "method" => "post", "accept-charset" => "UTF-8");
		                    		echo '<ul id="login-dp" class="dropdown-menu">
									<li>
										 <div class="row">
												<div class="col-md-12">
													Inicia con
													<div class="social-buttons">
														<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
														<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
													</div>
					                                <p>o ingresa tus datos</p>
					                                 '  
			            . form_open('usuario/login',$attributes).'
													 
															<div class="form-group">
																 <label class="sr-only" for="exampleInputEmail2">Email address</label>
																 <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Correo" required>
															</div>
															<div class="form-group">
																 <label class="sr-only" for="exampleInputPassword2">Password</label>
																 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
					                                             <div class="help-block text-right"><a href="">Olvidaste la contraseña ?</a></div>
															</div>
															<div class="form-group">
																 <button type="submit" name="loginSubmit" value="send" class="btn btn-primary btn-block">Ingresa</button>
															</div>
													'.form_close().'
												</div>
												<div class="bottom text-center">
													Eres nuevo ? <a href="'.site_url('usuario/crear').'"><b>Únete</b></a>
												</div>
										 </div>
									</li>
								</ul>';
		                    	}

					          	
								
								?>
					        </li>
					     
					      <li class="tada-hover" style="padding-right: 10px"><a href="#"><span class="glyphicon glyphicon-star"></span><b>Deseados</b></a></li>
					    </ul>
			            <?php $attributes = array("class" => "navbar-form navbar-search navbar-right","name" => "buscarForm", "id" => "form", "role" => "search"); 
			            echo form_open('Articulo/crearBicicleta',$attributes); ?>
			                <div class="input-group">
			                    <input type="text" class="form-control">
			                
			                    <div class="input-group-btn">
			                        <button type="submit" class="btn btn-search btn-info" name="btn-buscar">
			                            <span class="glyphicon glyphicon-search"></span>
			                            <span class="label-icon">Buscar</span>
			                        </button>
			                        <button type="button" class="btn dropdown-toggle btn-info"  data-toggle="dropdown">
			                            <span class="caret"></span>
			                        </button>
			                        <ul class="dropdown-menu pull-right" role="menu">
			                            <li class="pulse-hover">
			                                <a href="#">
			                                	<span class="glyphicon glyphicon-search"></span>
			                                    <span>Bicicletas</span>
			                                </a>
			                            </li>
			                            <li class="pulse-hover">
			                                <a href="#">
			                                <span class="glyphicon glyphicon-search"></span>
			                                <span>Accesorios</span>
			                                </a>
			                            </li>
			                            <li class="pulse-hover">
			                            	<a href="#">
			                            	<span class="glyphicon glyphicon-search"></span>
			                            	<span>Partes</span>
			                            	</a>
			                            </li>
			                        </ul>
			                    </div>
			                </div> 
			            <?php echo form_close(); ?>
			            </form>   
			         
			        </div>
			    </nav>
			   </div>
			   <div class="container">
			
		
	<?php
		}

		function __destruct(){
	?>
			
			</div>
			<div class="container-fluid">
				
				<div class="row">
					<footer class="zigzag jagged-top col-xs-12" style="background-color:#232F3E;margin-top: 20px; padding-top: 20px;">
					<div class="col-xs-12">
						<div class="col-xs-4 col-md-4">
							
							<ul style="list-style: none">
										<h4>Categorías</h4>
									    <li><a href="#"><b>Bicicletas</b></a></li>
									    <li><a href="#"><b>Partes</b></a></li>
									    <li><a href="#"><b>Accesorios</b></a></li>
							</ul>
						</div>
						<div class="col-xs-4 col-md-4">
							<h4>Contacto</h4>
							<p>Teléfono: (809) 392-3924</p>
							<p>Itlabikeshop@gmail.com</p>
							<b><a href="<?php echo site_url('home/contacto')?>">Formulario de contacto</a></b>
						</div>

						<div class="col-xs-4 col-md-4">
							<div class="row">
								<h4>Media</h4>
								<div class="col-xs-4">
									<a target="_blank" href="https://plus.google.com/113398186093625548979" class="rubber-hover google-button fa fa-google-plus media-circle"></a>
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="https://www.facebook.com/ITLABike-1667028566935787/" class="rubber-hover media-circle facebook-button fa fa-facebook"></a>
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="https://twitter.com/itlabikeshop" class="rubber-hover media-circle twitter-button fa fa-twitter"></a>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p style="padding-top: 40px" class="text-center">© Copyright 2017 ItlaBike Shop, Inc.</p>
							</div>
						</div>
					</div>
				</div>
				</footer>
			</div>
		</body>
		</html>
	<?php
		}
	}