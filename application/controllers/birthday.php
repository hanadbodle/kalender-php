<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class birthday extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ 
		$this->load->model("birthday_model");
		$data['birthdays'] = $this->birthday_model->get_birthdays(); 
		$this->load->view('template/header', $data);
		$this->load->view('birthday/birthdays', $data);
		$this->load->view('template/footer', $data);
	
	}

	public function edit()
	{ 
		echo "je bent op de edit page";
	}

}