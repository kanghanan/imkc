<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		$this->load->view('header');
		$this->load->view('home/navbar');
		$this->load->view('home/homepage');
		$this->load->view('footer');
	}

	function registrasi()
	{
		$this->load->view('header');
		$this->load->view('home/navbar');
		$this->load->view('home/registrasi');
		$this->load->view('footer');
	}

	function login()
	{
		$this->load->view ('header');
		$this->load->view ('home/navbar');
		$this->load->view ('home/login');
		$this->load->view ('footer');
	}
}
