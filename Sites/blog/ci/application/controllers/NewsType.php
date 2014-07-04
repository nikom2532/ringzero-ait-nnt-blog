<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewsType extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$tid = '';
		 		$data['title'] = 'หมวดหมู่ข่าวหลักและข่าวย่อย : '.$tid;
			
				$data['news'] = $this->prd_homeprd_model->get_NewsType();
				
				$this->load->view('news_type', $data);
	}

}

/* End of file RawNews.php */
/* Location: ./application/controllers/RawNews.php */