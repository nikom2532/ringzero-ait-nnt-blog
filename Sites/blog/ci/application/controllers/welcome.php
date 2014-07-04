<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		//$this->load->library("pagination");
		//$this->load->helper("url");
		//$this->load->library('session');
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
				$data['title'] = 'PRD NEWS';
			
				$data['news'] = $this->prd_homeprd_model->get_NT01_News();
				
				
			
			//For Test
			// var_dump($data['news']);
			// var_dump($this->input->post());
			// echo $this->input->post("news_title");
			// var_dump($this->input->post("news_title"));
			// echo ($data["news"]->News_Date);
			
			//For test Database NNT_DataCenter
			// $data["get_testdb2"] = $this->prd_homeprd_model->get_testdb2();
			// var_dump($data["get_testdb2"]);
			
			
			
			// After Load the Page --> Will insert the UserID from Old Database to New Database
			//Insert News Table from Old Database to New Database
			//$this->prd_homeprd_model->set_News(
			//	$data['news']
				// $this->prd_homeprd_model->get_NT10_VDO(),
				// $this->prd_homeprd_model->get_NT01_News(),
				// $this->prd_homeprd_model->get_NT11_Picture(),
				// $this->prd_homeprd_model->get_NT12_Voice(),
				// $this->prd_homeprd_model->get_NT13_OtherFile()
			//);
			
			//$data['New_News'] = $this->prd_homeprd_model->get_New_News();
			
			
			//$this->load->view('prdsharing/templates/header', $data);
			
			//$data['home_search'] = "homePRD";
			
			//$this->load->view('prdsharing/home/header', $data);
			//$this->load->view('prdsharing/home/homeprd', $data);
			//$this->load->view('prdsharing/templates/footer', $data);
		$this->load->view('welcome_message', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */