<?php 
	plantilla::inicio();
?>
	<div class="row mt-4">
		<div class="col-sm-8 offset-sm-2 pt-3 form-custom">
				
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Únete</h1>
					<p  class="text-center" style="color: gray">Disfruta de los beneficios</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<form action="" name="formRegistro" id="formRegistro" method="post" onsubmit="return validar();">
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="name" placeholder="Nombre" required="" value="<?php echo !empty($user['nombreusuario'])?$user['nombreusuario']:''; ?>">
									<?php echo form_error('name','<span>','</span>'); ?>
								</div>
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="lastname" placeholder="Apellido" required="" value="<?php echo !empty($user['apellido'])?$user['apellido']:''; ?>">
									<?php echo form_error('lastname','<div class="alert alert-danger animated bounceIn" alert="alert">','</div>'); ?>
								</div>
								<div class="form-group valid-form" id="cedula-input-group"">
									<input type="text" id="cedula" class="form-control" name="cedula" placeholder="Cedula" required="" value="<?php echo !empty($user['cedula'])?$user['cedula']:''; ?>">
									<?php echo form_error('cedula','<div class="alert alert-danger animated bounceIn" alert="alert">','</div>'); ?>
								</div>
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="username" placeholder="Nombre de Usuario" required="" value="<?php echo !empty($user['nombreusuario'])?$user['nombreusuario']:''; ?>">
									<?php echo form_error('username','<div class="alert alert-danger animated bounceIn" alert="alert">','</div>'); ?>
								</div>
								<div class="form-group has-feedback">
									<input type="email" class="form-control inputEmail" name="email" placeholder="Correo" data-error="That email address is invalid" required="" value="<?php echo !empty($user['correo'])?$user['correo']:''; ?>">
									<?php echo form_error('email','<div class="alert alert-danger animated bounceIn" alert="alert">','</div>'); ?>
								</div>
								<div class="form-group valid-form" id="tel-input-group">
									<input type="text" class="form-control" id="telefono" name="phone" placeholder="Telefono" value="<?php echo !empty($user['telefono'])?$user['telefono']:''; ?>">
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Contraseña" required="">
								  <?php echo form_error('password','<div class="alert alert-danger animated bounceIn" alert="alert">','</div>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control" data-match=".inputPassword" data-match-error="No coninciden" name="conf_password" placeholder="Confirmar contraseña" required="">
								  <?php echo form_error('conf_password','<div class="alert alert-danger animated bounceIn" alert="alert">','</div>'); ?>
								</div>
								<div class="form-group">
									<?php
									if(!empty($user['gender']) && $user['gender'] == 'Mujer'){
										$fcheck = 'checked="checked"';
										$mcheck = '';
									}else{
										$mcheck = 'checked="checked"';
										$fcheck = '';
									}
									?>
									<div class="radio">
										<label>
										<input type="radio" name="gender" value="Hombre" <?php echo $mcheck; ?>>
										Hombre
										</label>
									</div>
									<div class="radio">
										<label>
										  <input type="radio" name="gender" value="Mujer" <?php echo $fcheck; ?>>
										  Mujer
										</label>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="regisSubmit" class="btn btn-primary" value="Registrar"/>
								</div>
							</form>
				</div>
			</div>
		</div>
	</div>
