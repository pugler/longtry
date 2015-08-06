<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function login() {
		$header['page'] = 'login';
		$this->load->view('admin/header',$header);
		$this->load->view('admin/login');
	}

	public function add_album_form() {		
		$header['page'] = 'addalbum';
		$return['admin_menu'] = $this->load->view('admin/admin_menu',$header,TRUE);
		//print_r($return); die;
		$this->load->view('admin/header',$header);

		$this->load->view('admin/add_album',$return);	
	}


	public function postalbum() {
		
		$this->load->model('admin_model');

		$data = array(
					'album_name'	=> $_POST['album_name'],
					'album_description' => $_POST['album_description'],
					'album_model'	=> $_POST['album_model'],
					'album_location' => $_POST['album_location'],
					'album_date'	=> $_POST['album_date'],
					'album_create_date' => date('Y-m-d H:i:s')
				);

		$album_id = $this->admin_model->add_album($data);		

		$upload_path = './upload/album_cover/';
		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $album_id;

		$param_upload = array(
							'file'	=> 'album_cover',
							'config' => $config
						);


		$this->do_upload($param_upload);
	}

	public function do_upload($param) {
	
		if(!is_dir($param['config']['upload_path'])) {
   			mkdir($param['config']['upload_path'],0777,TRUE);
		}
	
		$this->load->library('upload', $param['config']);

		if ( ! $this->upload->do_upload($param['file']))
		{
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
			print_r($error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			print_r($data);
			//$this->load->view('upload_success', $data);
		}
	}
}
