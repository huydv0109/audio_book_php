<?php 
require APPPATH . '/libraries/REST_Controller.php';
class AudioBook extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Base_model');
	}
	public function getAudioBookDataById_get(){
		$data = $this->get();
		$id = intval($data['id']);
		$rs = $this->Base_model->get_all($id);
		$this->response_data($rs, REST_Controller::HTTP_OK, 'Success');
	}

	
}