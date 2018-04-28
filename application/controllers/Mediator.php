<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mediator extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		$this->dashboard();
	}

	function dashboard()
	{
		$this->load->view ('header');
		$this->load->view ('mediator/sidebar');
		$this->load->view ('mediator/navbar');
		$this->load->view ('mediator/dashboard');
		$this->load->view ('footer');
	}

	function profil()
	{
		$this->load->view ('header');
		$this->load->view ('mediator/sidebar');
		$this->load->view ('mediator/navbar');
		$this->load->view ('mediator/profil');
		$this->load->view ('footer');
	}

	function histori()
	{
		$this->load->view ('header');
		$this->load->view ('mediator/sidebar');
		$this->load->view ('mediator/navbar');
		$this->load->view ('mediator/histori');
		$this->load->view ('footer');
	}
}
