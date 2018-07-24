<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {

		$crud = new Grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table("users");
		$crud->columns('username', 'email', 'company');
		$form = $crud->render();

		$this->load->view("crud/index", $form);

	}

}