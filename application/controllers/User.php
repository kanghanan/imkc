<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
       
	}

	function checklogin()
	{
		$this->load->view('home/check-login');

	}
	function index()
	{
		$this->load->view('header');
		$this->load->view('User/navbar');
		$this->load->view('User/left_sidebar');
		$this->load->view('User/dashboard');
		$this->load->view('footer');
	}
	function profil()
	{
		$this->load->view('header');
		$this->load->view('User/navbar');
		$this->load->view('User/left_sidebar');
		$this->load->view('User/profil');
		$this->load->view('footer');
	}
	function edit_profil()
	{
		$this->load->view('header');
		$this->load->view('User/navbar');
		$this->load->view('User/left_sidebar');
		$this->load->view('User/edit_profil');
		$this->load->view('footer');
	}
	function profil_lain()
	{
		$this->load->view('header');
		$this->load->view('User/navbar');
		$this->load->view('User/left_sidebar');
		$this->load->view('User/profil_lain');
		$this->load->view('footer');
	}
	function pencarian()
	{
		$this->load->view('header');
		$this->load->view('User/navbar');
		$this->load->view('User/left_sidebar');
		$this->load->view('User/pencarian');
		$this->load->view('footer');
	}
	function pengaturan()
	{
		$this->load->view('header');
		$this->load->view('User/navbar');
		$this->load->view('User/left_sidebar');
		$this->load->view('User/pengaturan');
		$this->load->view('footer');
	}
}