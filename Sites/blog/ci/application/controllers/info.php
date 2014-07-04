<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Info extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('test_model');
    }

    public function index() {
        $this->load->view('info_view');
    }

    function info_view() {
        $rs = $this->test_model->getRow();
        echo 'Result set = '.count($rs);
        //echo "<pre>";
        //print_r($rs);
        //echo "</pre>";
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */