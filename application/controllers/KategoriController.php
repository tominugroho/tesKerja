<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller {

	public function __construct(){ //construct digunakan untuk pembentukan objek saat class dijalankan
		parent::__construct();
		$this->load->model('KategoriModel');
		
	}
	public function getData(){
		$response = $this->KategoriModel->getData()->result(); //mendapatkan data
		
		$this->output
		->set_status_header(201) //untuk menampilkan status data
		->set_content_type('application/json') //untuk menentukan type data output 
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}
}