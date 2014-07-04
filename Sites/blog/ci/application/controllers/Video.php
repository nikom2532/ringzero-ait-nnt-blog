<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}

	public function index()
	{
		$nid = 'TNART5610090010009';
		$uid = 2000000930;
		 		$data['title'] = ' ไฟล์วีดีโอของข่าว   (รวมทั้งข่าวดิบและข่าวเผยแพร่) : '.$uid;
			
				$data['news'] = $this->prd_homeprd_model->get_VDO($uid);
				
				$this->load->view('video', $data);
	}

}
/*
1050516016
1081010118
1101004312
1111004046
2000000049
2000000058
2000000151
2000000326
2000000387
2000000553
2000000621
2000000628
2000000685
2000000687
2000000921
2000000930
2000100032
2000200099
2008900007
2008900718
2010300011
2010300013
2015600001
2015600003
2016400002
2016500001
2017400001
2018300001
2019600742
2020200611
2099900002
2099900068
2099900102
2099900132
1030305115
1100222272
1100722291
1100906297
1101103320
2000000079
2000000349
2000000398
2000000617
2000000764
2000000800
2000000849
2000000881
*/
/* End of file Video.php */
/* Location: ./application/controllers/Video.php */