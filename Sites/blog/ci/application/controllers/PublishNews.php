<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PublishNews extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$uid = 1021205012;
		 		$data['title'] = 'ข่าวเผยแพร่ : '.$uid;
			
				$data['news'] = $this->prd_homeprd_model->get_PublishNews($uid);
				
				$this->load->view('publish_news', $data);
	}

}

/* End of file RawNews.php */
/* Location: ./application/controllers/RawNews.php */