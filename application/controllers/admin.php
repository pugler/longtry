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
		$return['admin_menu'] = $this->load->view('admin/admin_memu',$header,TRUE);
		print_r($return); die;
		$this->load->view('admin/header',$header);

		$this->load->view('admin/add_album',$return);	
	}
}
