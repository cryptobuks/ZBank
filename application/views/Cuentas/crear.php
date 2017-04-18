<?php 
	plantilla::inicio();
?>

	<div class="row mt-4">
		<div class="col-sm-8 offset-sm-2 pt-3 form-custom">
				
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Solicita una cuenta</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<form action="" name="formCrear" id="formCrear" method="post">
								<div class="input-group mb-2 mr-sm-2 mb-sm-2">
								    <div class="input-group-addon primary">Moneda</div>
								    <select class="form-control" name="moneda">
								      <?php
								      	if($monedas){
								      		foreach ($monedas as $item) {
								      			echo '<option value="'.$item['IDMONEDA'].'">'. $item['ABREVIATURA']. '</option>';
								      		}
								      	}
								      ?>
								    </select>
								  </div>
								<div class="form-group">
									<input type="submit" name="extraSubmit" class="btn btn-primary btn-block" value="Solicitar"/>
								</div>
								<a class="btn btn-block btn-danger mb-3" href="<?php echo site_url('users/account')?>">Regresar</a>
							</form>
				</div>
			</div>
		</div>
	</div>