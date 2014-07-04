<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Picture extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$nid = 'TNART5610090010009';
		 		$data['title'] = ' ไฟล์รูปภาพของข่าว  (รวมทั้งข่าวดิบและข่าวเผยแพร่) : '.$nid;
			
				$data['news'] = $this->prd_homeprd_model->get_Picture($nid);
				
				$this->load->view('picture', $data);
	}

}

/* End of file RawNews.php */
/* Location: ./application/controllers/RawNews.php */