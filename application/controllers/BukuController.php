<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuController extends CI_Controller {

	public function __construct(){ //construct digunakan untuk pembentukan objek saat class dijalankan
		parent::__construct();
		$this->load->model('BukuModel');
		
	}

	public function index()
	{
		// $param['buku'] = $this->BukuModel->getData()->result();
		// $this->load->view('data_buku',$param);
		$this->load->view('data_buku');
	}


	public function getData(){
		$response = $this->BukuModel->getData()->result(); //mendapatkan data
		
		$this->output
		->set_status_header(201) //untuk menampilkan status data
		->set_content_type('application/json') //untuk menentukan type data output 
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

	public function simpanData(){
		parse_str(file_get_contents('php://input'),$data);
		$this->BukuModel->simpanData($data);

		$data = array(
			'info' => 'data kelas berhasil disimpan'
		);

		$this->output
		->set_status_header(201) 
		->set_content_type('application/json') 
		->set_output(json_encode($data, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

	public function ubahData(){
		parse_str(file_get_contents('php://input'),$data);
		$this->BukuModel->ubahData($data);

		$data = array(
			'info' => 'perubahan berhasil disimpan'
		);

		$this->output
		->set_status_header(201) 
		->set_content_type('application/json') 
		->set_output(json_encode($data, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

	public function filterData($filter_by,$keyword){
		$response = $this->BukuModel->filterData($filter_by,$keyword)->result(); //mendapatkan data
		
		$this->output
		->set_status_header(201) //untuk menampilkan status data
		->set_content_type('application/json') //untuk menentukan type data output 
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

	public function getDataBuku($id_buku){
		$response = $this->BukuModel->getDataBuku($id_buku)->row(); //mendapatkan data
		
		$this->output
		->set_status_header(201) //untuk menampilkan status data
		->set_content_type('application/json') //untuk menentukan type data output 
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}
}
