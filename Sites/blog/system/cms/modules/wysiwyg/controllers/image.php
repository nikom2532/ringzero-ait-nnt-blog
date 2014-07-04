<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Manages image selection and insertion for WYSIWYG editors
 *
 * @author		PyroCMS Dev Team
 * @package		PyroCMS\Core\Modules\WYSIWYG\Controllers
 */
class Image extends WYSIWYG_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_homeprd_model');
	}
	
	public function index($id = 0)
	{
		$data = new stdClass();

		$data->folders			= $this->file_folders_m->get_folders();
		$data->subfolders		= array();
		$data->current_folder	= $id && isset($data->folders[$id])
								? $data->folders[$id]
								: ($data->folders ? current($data->folders) : array());
							
		if ($data->current_folder)
		{
			if ($this->current_user->group == 'admin'){
				$data->current_folder->items = $this->file_m
				->select('files.*, file_folders.location')
				->join('file_folders', 'file_folders.id = files.folder_id')
				->order_by('files.date_added', 'DESC')
				->where('files.type', 'i')
				//->where('files.user_id', $this->current_user->id)
				->get_many_by('files.folder_id', $data->current_folder->id);
			} else {
				$data->current_folder->items = $this->file_m
				->select('files.*, file_folders.location')
				->join('file_folders', 'file_folders.id = files.folder_id')
				->order_by('files.date_added', 'DESC')
				->where('files.type', 'i')
				->where('files.user_id', $this->current_user->id)
				->get_many_by('files.folder_id', $data->current_folder->id);
			}

			

			$subfolders = $this->file_folders_m->folder_tree($data->current_folder->id);

			foreach ($subfolders as $subfolder)
			{
				$data->subfolders[$subfolder->id] = repeater('&raquo; ', $subfolder->depth) . $subfolder->name;
			}

			// Set a default label
			$data->subfolders = $data->subfolders
				? array($data->current_folder->id => lang('files:root')) + $data->subfolders
				: array($data->current_folder->id => lang('files:no_subfolders'));
		}

		// Array for select
		$data->folders_tree = array();
		foreach ($data->folders as $folder)
		{
			$data->folders_tree[$folder->id] = repeater('&raquo; ', $folder->depth) . $folder->name;
		}


		//	$this->current_user->id
		$uid = 1021205012;
		 		$data->title_prd = ' ไฟล์รูปภาพของข่าว  (รวมทั้งข่าวดิบและข่าวเผยแพร่)';
				$data->get_news  = $this->prd_homeprd_model->get_NT01_News();
			

		$this->template
			->title('Images')
			->append_js('admin/jquery.droptabs.js')
			->append_js('admin/datatables/jquery.dataTables-1.7.6.min.js')
			->append_css('admin/basic_layout.css')
			->append_css('workless/workless.css')
			->append_css('workless/application.css')
			->append_css('admin/datatables/jquery.dataTables.css')
			->append_css('admin/datatables/jquery.dataTables_themeroller.css')
			->build('image/index', $data);
	}

	
}