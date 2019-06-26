<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenerbitModel extends CI_Model {
	var $tabel = "penerbit";

	public function getData(){
		return $this->db->get($this->tabel);
	}
}