<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$nid = 'TNART5610090010009';
		$uid = 1030305102;
		 		$data['title'] = ' ไฟล์เสียงของข่าว   (รวมทั้งข่าวดิบและข่าวเผยแพร่) : '.$uid;
			
				$data['news'] = $this->prd_homeprd_model->get_Voice($uid);
				
				$this->load->view('voice', $data);
	}

}

/* End of file Voice.php */
/* Location: ./application/controllers/Voice.php */