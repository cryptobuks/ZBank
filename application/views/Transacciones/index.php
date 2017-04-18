<?php 
	plantilla::inicio();
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="text-center modal-title">Confirmar Transferencia</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-success" id="confirmar">Transferir</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Confirmar
  </div>
  <div class="modal-footer">
    
    <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
  </div>
</div>
<div class="row mt-4">
		<div class="col-sm-8 offset-sm-2 pt-3 form-custom">
				
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Transferir</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<form name="formTransferir" id="formTransferir" method="post">
								<div class="input-group mb-2 mr-sm-2 mb-sm-2">
								    <div class="input-group-addon primary">Cuenta Origen</div>
								    <select class="form-control" name="origen">
								      <?php
								      	if($accounts){
								      		foreach ($accounts as $item) {
								      			echo '<option value="'.$item['IDCUENTA'].'">'. $item['IDCUENTA']. '</option>';
								      		}
								      	}
								      ?>
								    </select>	
								  </div>
								<div class="form-group valid-form" id="destino-input-group">
									<input type="text" class="form-control" id="destino" name="destino" placeholder="Cuenta destino" required="">
								</div>
								<div class="form-group valid-form" id="monto-input-group">
									<input type="text" class="form-control" id="monto" name="monto" placeholder="Monto" required="">
								
								</div>
								<?php 
									if(isset($msg)){
										echo '<div class="alert alert-danger animated bounceIn" alert="alert">'.$msg.'</div>';
									}else if(isset($msgSucc)){
										echo '<div class="alert alert-success animated bounceIn" alert="alert">'.$msgSucc.'</div>';
									}else{
										echo '';
									}
									
								?>
								<div class="form-group">
									<button type="submit" name="TransaccionSubmit" class="btn btn-success btn-block" value="Send">Transferir</button>
								</div>
								
								<a class="btn btn-block btn-danger mb-3" href="<?php echo site_url('users/account')?>">Regresar</a>
							</form>
				</div>
			</div>
		</div>
	</div>