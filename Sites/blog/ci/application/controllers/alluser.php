<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alluser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$uid = 'DESC';
		 		$data['title'] = 'ผู้ใช้งานทั้งหมด : '.$uid;
			
				$data['news'] = $this->prd_homeprd_model->get_AllUserdata();
				
				$this->load->view('all_user', $data);
	}

}

/* End of file RawNews.php */
/* Location: ./application/controllers/RawNews.php */