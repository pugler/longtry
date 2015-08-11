<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

	public function index()
	{
		$this->load->view('viewalbum');
	}

	public function view_album($id) {
		$return = array();
		$this->load->model('album_model');	
		$param = array(
					'album_id'	=> $id
				); 
		$album_detail = $this->album_model->get_album_detail($param);
		$return['album_detail'] = $album_detail;
		$this->load->view('viewalbum',$return);
		
	}
}
