<?php 
	plantilla::inicio();
?>

<div class="row mt-3">
	<div class="col-sm-12 col-md-2 ">
			<div class="row">
				<div class="col-sm-12 white-bg pb-3 pt-3">
					<h3> Necesitas otra?</h3>
					<?php
						echo '<a class="btn btn-block btn-success" href="'.site_url("cuentas/crear").'">Solicita una</a>';
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 white-bg pb-3 mt-3 pt-3">
					<?php
						echo '<a class="btn btn-block btn-danger" href="'.site_url("users/account").'">Regresar</a>';
					?>
				</div>
			</div>
		
	</div>
	<div class="col-sm-12 col-md-10">
	<h4 class="text-center white-bg pt-3 pb-3"><b>Cuentas</b></h4>
	  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
	    <div class="input-group-addon primary"><i class="fa fa-filter" aria-hidden="true"> Estado</i> </div>
	    <select class="form-control" id="filtroCuentas">
	      <option>Todos</option>
	      <option>Aprobada</option>
	      <option>Solicitada</option>
	      <option>Cancelada</option>
	    </select>
	  </div>
	<table class="table" style="background-color: white">
		<thead>
		    <tr>
		      <th>Código</th>
		      <th>Balance</th>
		      <th>Moneda</th>
		      <th>Estado</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
				if($Apaccounts){
					foreach($Apaccounts as $item){

						$attributes = array("class" => "form","name" => "cuentaForm", "id" => "login-nav", "role" => "form", "method" => "post", "accept-charset" => "UTF-8");
						echo '<tr class="Aprobada">
								<td>'.$item['IDCUENTA'].'</td>
								<td>'.$item['BALANCE'].'</td>
								<td>'.$item['ABREVIATURA'].'</td>
								<td><p class="text-center btn-success rounded">'.$item['NOMBRE'].'</p></td>
								<td>
							';
						echo form_open('cuentas/details',$attributes). '
							  <button name="accIdSubmit" type="submit" class="btn-block btn btn-info" value="'.$item['IDCUENTA'].'"">Ver Cuenta</button>
							  '.form_close();
						echo '</td></tr>';
					}
				}
				if($Solaccounts){
					foreach($Solaccounts as $item){
						echo '<tr class="Solicitada">
								<td>'.$item['IDCUENTA'].'</td>
								<td>'.$item['BALANCE'].'</td>
								<td>'.$item['ABREVIATURA'].'</td>
								<td><p class="text-center btn-warning rounded">'.$item['NOMBRE'].'</p></td>
								<td>
								</td>
							</tr>';
					}
				}

				if($Canaccounts){
					foreach($Canaccounts as $item){
						echo '<tr class="Cancelada">
								<td>'.$item['IDCUENTA'].'</td>
								<td>'.$item['BALANCE'].'</td>
								<td>'.$item['ABREVIATURA'].'</td>
								<td><p class="text-center btn-danger rounded">'.$item['NOMBRE'].'</p></td>
								<td>
								</td>
							</tr>';
					}
				}
		  	?>
		  </tbody>
	</table>
	</div>
</div>