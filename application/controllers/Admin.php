<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/dashboard');
		$this->load->view('footer');
	}
	function manage_user()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/manage_user');
		$this->load->view('footer');
	}
	function manage_mediator()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/manage_mediator');
		$this->load->view('footer');
	}
	function tambah_mediator()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/tambah_mediator');
		$this->load->view('footer');
	}
	function profil()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/profil');
		$this->load->view('footer');
	}
	function statistik()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/statistik');
		$this->load->view('footer');
	}
	function edit_profil()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/edit_profil');
		$this->load->view('footer');
	}
	function pencarian()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/pencarian');
		$this->load->view('footer');
	}
	function pengaturan()
	{
		$this->load->view('header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/left_sidebar');
		$this->load->view('Admin/pengaturan');
		$this->load->view('footer');
	}
}
