<?php 
require APPPATH . '/libraries/REST_Controller.php';
class AudioType extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index_get(){

		$this->response_data($this->db->get('audio_type')->result(), REST_Controller::HTTP_OK, 'Success');
	}


}