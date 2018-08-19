<?php
class Device extends CI_Controller{
	public function __construct(){
		parent::__construct();	
		$this->load->model('M_device');
	}
	public function status($box_id=null, $id=null){
		$status = $this->M_device->get_devices($box_id, $id);
		$response['result_code'] = 0;

		if( $status['status'] == 'OK' )
			$response['data'] = $status["data"];
		else{
			$response['result_code'] = 0x01;
			$response['data'] = '';
		}
		echo json_encode($response);
	}
}
?>
