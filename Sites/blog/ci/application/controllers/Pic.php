<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$nid = 'TNART5610090010009';
		$uid = 1021205012;
		 		$data['title'] = ' ไฟล์รูปภาพของข่าว  (รวมทั้งข่าวดิบและข่าวเผยแพร่) : '.$uid;
			
				$data['news'] = $this->prd_homeprd_model->get_Picture($uid);
				
				$this->load->view('picture', $data);
	}

}

/* End of file Pic.php */
/* Location: ./application/controllers/Pic.php */