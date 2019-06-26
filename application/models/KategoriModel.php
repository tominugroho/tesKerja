<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {
	var $tabel = "kategori";

	public function getData(){
		return $this->db->get($this->tabel);
	}
}