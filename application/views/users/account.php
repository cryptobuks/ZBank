<?php 
	plantilla::inicio();
?>
		
	<div class="row mt-3">
		<div url="<?php echo site_url('cuentas/index');?>" class="pulse-hover col-sm-3 offset-sm-1 p-2 div-link mb-2">
			<div class="row">
				<div class="col-sm-12 gray-bg pb-3 pt-3">
					<h4 class="text-center">Mis cuentas</h4>
					<p class="text-center"><i class="fa fa-4x  fa-user-circle"></i></p>
				</div>
			</div>
		</div>
		<div class="pulse-hover col-sm-3 offset-sm-1 p-2  mb-2">
			<div class="row">
				<div class="col-sm-12 gray-bg pb-3 pt-3">
					<h4 class="text-center">Mis tarjetas</h4>
					<p class="text-center"><i class="fa fa-4x fa-credit-card"></i></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3 offset-sm-1" style="background-color: rgba(255,255,255,0.6)">
			<h3 class="text-center pt-2 pb-2" style="border-bottom: 1px solid gray">Bienvenido <?php echo $user['NOMBRE'] ?></h3>
			<p class="text-center mt-3" style="background-color: #232F3E; color: white; border-radius: 3px"><b>Cuentas</p>
			<?php

				foreach($Apaccounts as $item){
					$attributes = array("class" => "form","name" => "cuentaForm", "id" => "login-nav", "role" => "form", "method" => "post", "accept-charset" => "UTF-8");
					echo form_open('cuentas/details',$attributes). '
						  <button class="mt-1 btn-block btn btn-info" name="accIdSubmit" value="'.$item['IDCUENTA'].'"">'.$item['IDCUENTA'].'</button>
						  '.form_close();
				}
			?>
			<p class="text-center mt-3" style="background-color: #232F3E; color: white; border-radius: 3px"><b>Tarjetas</b></p>
			<p class="text-center mt-3" style="background-color: #232F3E; color: white;border-radius: 3px"><b>Transacciones</b></p>
			<a href="<?php echo site_url('Transacciones/index');?>" class="mb-3 btn-block btn btn-info">Transferir</a>
			<a href="<?php echo site_url('Transacciones/historial');?>" class="mb-3 btn-block btn btn-info">Historial de transacciones</a>
		</div>

		
		<!--
		
		-->
	</div>