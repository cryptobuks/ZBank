<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transacciones extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('cuenta');
        $this->load->model('moneda');
        $this->load->model('transaccion');
    }

    public function index(){
    	if($this->session->userdata('isUserLoggedIn')){
    		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
    		$con['conditions'] = array('usuario'=>$this->session->userdata('userId'), 'ESTADO' => 2);
            $accounts = $this->cuenta->getRows($con);
    		$data['accounts'] = $accounts;

	    	if($this->input->post('TransaccionSubmit') || $this->input->post('monto')){

	    		$con['id'] = $this->input->post('origen');
	            $origen = $this->cuenta->getRows($con);
	            $balance = $origen['BALANCE'];
	            $monto = $this->input->post('monto');
	            if($monto > $balance){
	            	$data['msg'] = "El monto supera el balance";
	            }else{
	            	$con['id'] = $this->input->post('destino');
	            	$destino = $this->cuenta->getRows($con);
	            	if($destino){
	            		$this->cuenta->transferir($origen['IDCUENTA'], $destino['IDCUENTA'], $monto);
	            		$data['msgSucc'] = "Transferencia completa";
	            	}else{
	            		$data['msg'] = "La cuenta destino no existe";
	            	}
	            }
	    	}
    		$this->load->view("Transacciones/index",$data);
    	}

	}

}