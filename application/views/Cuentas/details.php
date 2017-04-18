<?php 
	plantilla::inicio();
?>

<div class="row">
	<div class="col-sm-12 col-md-2 ">
			<div class="row">
				<div class="col-sm-12 white-bg pb-3 mt-3 pt-3">
					<?php
						echo '<a class="btn btn-block btn-danger" href="'.site_url("cuentas/index").'">Regresar</a>';
					?>
				</div>
			</div>
	</div>
	<div class="col-sm-12 col-md-10">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="text-center white-bg pt-3 pb-3"><b>Detalle de cuenta</b></h4>
				<table class="table" style="background-color: white">
					<thead>
					    <tr>
					      <th>Código</th>
					      <th>Balance</th>
					      <th>Moneda</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
							if($Account){
								echo '<td>'.$Account['IDCUENTA'].'</td>
									<td>'.$Account['BALANCE'].'</td>
									<td>'.$Account['ABREVIATURA'].'</td>
								';
							}
					  	?>
					  </tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h4 class="text-center white-bg pt-3 pb-3"><b>Últimas transacciones</b></h4>
			</div>
		</div>
	</div>
</div>
