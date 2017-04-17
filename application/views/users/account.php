<?php 
	plantilla::inicio();
?>

    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<h2>User Account</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<a href="<?php echo site_url('users/logout'); ?>" class="logoutBtn">Logout</a>
						<div class="input-info">
							<h3>Welcome <?php echo $user['nombre']; ?>!</h3>
						</div>
						<div class="account-info">
							<p><b>Name: </b><?php echo $user['nombre']; ?></p>
							<p><b>Email: </b><?php echo $user['correo']; ?></p>
							<p><b>Phone: </b><?php echo $user['telefono']; ?></p>
							<p><b>Gender: </b><?php echo $user['genero']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
