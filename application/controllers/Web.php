<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
}
