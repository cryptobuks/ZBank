<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cuenta extends CI_Model{
    function __construct() {
        $this->userTbl = 'cuenta_ahorro';
    }

        function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        $this->db->join('moneda', 'cuenta_ahorro.MONEDA = moneda.IDMONEDA');
        $this->db->join('estado_cuenta', 'cuenta_ahorro.ESTADO = estado_cuenta.IDESTADO');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}
        
        if(array_key_exists("id",$params)){
            $this->db->where('IDCUENTA',$params['id']);
			$query = $this->db->get();
			$result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
				$result = $query->num_rows();
			}elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			}else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
        public function addMonto($id, $monto){
            $this->db->set('BALANCE', '`set_row`+ ' . $monto, FALSE);
            $this->db->where('IDCUENTA', $id);
            $this->db->update($this->userTbl);
        }

        public function removeMonto($id, $monto){
            $this->db->set('BALANCE', '`set_row`- ' . $monto, FALSE);
            $this->db->where('IDCUENTA', $id);
            $this->db->update($this->userTbl);
        }

        public function transferir($origen, $destino, $monto){
            $this->db->set('BALANCE', 'BALANCE+ ' . $monto, FALSE);
            $this->db->where('IDCUENTA', $destino);
            $this->db->update($this->userTbl);
            $this->db->set('BALANCE', 'BALANCE- ' . $monto, FALSE);
            $this->db->where('IDCUENTA', $origen);
            $this->db->update($this->userTbl);
        }

        public function insert($data = array()) {
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

}