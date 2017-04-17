<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('idusuario'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/account', $data);
        }else{
            redirect('home');
        }
    }
    
    /*
     * User login
     */
    public function login(){
        $data = array();

        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){

            $this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'nombreusuario'=>$this->input->post('username'),
                    'contrasena' => md5($this->input->post('password'))
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['idusuario']);
                    redirect('users/account/');
                }else{
                    $data['error_msg'] = 'Nombre de usuario o contraseña equivocado.';
                }
            }
        }
        //load the view
        $this->load->view('home/index', $data);
    }
    
    /*
     * User registration
     */
    public function registration(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('username', 'Nombre de usuario', 'required|callback_username_check');
            $this->form_validation->set_rules('cedula', 'Cedula', 'required|callback_cedula_check');
            $this->form_validation->set_rules('name', 'Nombre', 'required');
            $this->form_validation->set_rules('email', 'Correo', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');
            $this->form_validation->set_rules('conf_password', 'Confirmar contraseña', 'required|matches[password]');

            $userData = array(
                'nombreusuario' => strip_tags($this->input->post('username')),
                'cedula' => strip_tags($this->input->post('cedula')),
                'apellido' => strip_tags($this->input->post('lastname')),
                'nombre' => strip_tags($this->input->post('name')),
                'correo' => strip_tags($this->input->post('email')),
                'contrasena' => md5($this->input->post('password')),
                'genero' => $this->input->post('gender'),
                'telefono' => strip_tags($this->input->post('phone'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->user->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Registro completo. Inicia sesión.');
                    redirect('home/index');
                }else{
                    $data['error_msg'] = 'Ocurrió un problema, Intenta de nuevo.';
                }
            }
        }
        $data['user'] = $userData;
        //load the view
        $this->load->view('users/registration', $data);
    }
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('home/index');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('correo'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'El correo ya existe.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function username_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('nombreusuario'=>$str);
        $checkUsername = $this->user->getRows($con);
        if($checkUsername > 0){
            $this->form_validation->set_message('username_check', 'El nombre de usuario ya existe.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function cedula_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('cedula'=>$str);
        $checkCedula = $this->user->getRows($con);
        if($checkCedula > 0){
            $this->form_validation->set_message('cedula_check', 'La cedula ya existe.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}