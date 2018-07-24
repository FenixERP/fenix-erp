<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index() {

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('principal/index');
		$this->load->view('layout/footer');

	}

}
