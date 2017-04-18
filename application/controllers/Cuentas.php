<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cuentas extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('cuenta');
        $this->load->model('moneda');
    }

    public function index(){
    	if($this->session->userdata('isUserLoggedIn')){
    		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));

    		//Cuentas aprovabas y disponibles
    		$con['conditions'] = array('usuario'=>$this->session->userdata('userId'), 'ESTADO' => 2);
            $accounts = $this->cuenta->getRows($con);
    		$data['Apaccounts'] = $accounts;

    		//Cuentas Solicitadas
    		$con['conditions'] = array('usuario'=>$this->session->userdata('userId'), 'ESTADO' => 1);
            $accounts = $this->cuenta->getRows($con);
            $data['Solaccounts'] = $accounts;


            //Cuentas Bloqueadas
            $con['conditions'] = array('usuario'=>$this->session->userdata('userId'), 'ESTADO' => 3);
            $accounts = $this->cuenta->getRows($con);
            $data['Canaccounts'] = $accounts;

    		$this->load->view('cuentas/index', $data);
    	}else{
    		redirect("home");
    	}
	}

	public function crear(){
		if($this->input->post('extraSubmit')){
			$cuentaData = array(
					'usuario' => $this->session->userdata('userId'),
					'moneda' => $this->input->post('moneda'),
					'ESTADO' => 1 
				);
			$insert = $this->cuenta->insert($cuentaData);
			if($insert){
                    redirect("users/account");
                }else{
                    redirect("cuentas/index");
             }
		}
		$monedas = $this->moneda->getRows();
    	$data['monedas'] = $monedas;
		$this->load->view("cuentas/crear",$data);
	}
    public function details(){
    	if($this->input->post('accIdSubmit')){
    		$con['id'] = $this->input->post('accIdSubmit');
            $account = $this->cuenta->getRows($con);
    		$data['Account'] = $account;
    		$data['prueba'] = $this->input->post('accIdSubmit');
    		$this->load->view("cuentas/details",$data);
    	}
    }
}