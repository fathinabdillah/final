<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent ::__construct();

		//load model
		$this->load->model('model_hmif'); 
	}

	public function index(){
		$title = ['title'=> "HMIF FT-UH",
		'dbhmif'=> $this->model_hmif->getAllData('hmif')
		];
		$this->load->view('admin_hmif', $title);
	}

	
}
