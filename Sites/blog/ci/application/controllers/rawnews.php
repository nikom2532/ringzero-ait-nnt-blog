<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rawnews extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$uid = 1120330379;
		 		$data['title'] = 'ข่าวดิบ : '.$uid;
			
				$data['news'] = $this->prd_homeprd_model->get_RawNews($uid);
				
				$this->load->view('raw_news', $data);
	}

}

/* End of file RawNews.php */
/* Location: ./application/controllers/RawNews.php */