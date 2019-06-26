<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengarangModel extends CI_Model {
	var $tabel = "pengarang";

	public function getData(){
		return $this->db->get($this->tabel);
	}
}