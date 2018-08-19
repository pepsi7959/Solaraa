<?php 
class M_device extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_devices($id_box, $id){
		if( !(is_empty($id_box) && !is_emtry($id)) 
			$query = $this->db->get_where("tbl_device", array('id_box' => $id_box, 'id'=> $id));
		}else if ( !is_empty($id_box) ){
			$query = $this->db->get_where("tbl_device", array('id_box' => $id_box ));
		}else{
			return null;
		}
		return $query->result_array();
	}

	public function set_device($id, $status){
	
	}	
}
?>
