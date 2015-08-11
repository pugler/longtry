<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$return = array();
		$this->load->model('album_model');

		$album_list = $this->album_model->get_album_list();
		$return['album_list'] = $album_list;

		$this->load->view('home',$return);
	}
}
