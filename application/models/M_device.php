<?php 
class M_device extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_devices($id_box, $id){
        $result['status'] = "OK";
        if( !empty($id_box) and !empty($id) ) {
            $query = $this->db->get_where("tbl_device", array('id_box' => $id_box, 'id'=> $id));
            $result['data'] = $query->result_array();
        }else if ( !empty($id_box) ){
            $query = $this->db->get_where("tbl_device", array('id_box' => $id_box ));
            $result['data'] = $query->result_array();
        }else{
            $result['status'] = "Failed";
        }
        return $result;
    }

    public function set_device($id, $status){
    
    }	
}
?>
