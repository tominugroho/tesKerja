<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuModel extends CI_Model {
	var $tabel = "buku";

	public function getData(){

		// return $this->db->query("select buku.*,nama_pengarang,nama_penerbit,kategori
		// 						from buku,pengarang,penerbit,kategori
		// 						where buku.id_pengarang=pengarang.id_pengarang and
		// 							buku.id_penerbit=penerbit.id_penerbit and
		// 							buku.id_kategori=kategori.id_kategori
		// 						order by judul_buku desc");

		// return $this->db->select('buku.*,nama_pengarang,nama_penerbit,kategori')
		// 			->join('pengarang','buku.id_pengarang=pengarang.id_pengarang')
		// 			->join('penerbit','buku.id_penerbit=penerbit.id_penerbit')
		// 			->join('kategori','buku.id_kategori=kategori.id_kategori')
		// 			->get($this->tabel);

		return $this->db->get("v_buku");

		// $this->db->where("tahun_terbit","2018")
		// 		 ->where("stok>",10)
		// 		 ->group_by("id_kategori")
		// 		 ->order_by("judul_buku","asc")
		// 		 ->get("Buku");
	}

	public function getDataBuku($id_buku){
		return $this->db->where("id_buku",$id_buku)->get("v_buku");
	}

	function simpanData($data){
		$val = array(
			'id_buku' => $data['id_buku'],
			'judul_buku' => $data['judul_buku'],
			'tahun_terbit' => $data['tahun_terbit'],
			'stok' => $data['stok'],
			'no_isbn' => $data['no_isbn'],
			'id_pengarang' => $data['pengarang'],
			'id_penerbit' => $data['penerbit'],
			'id_kategori' => $data['kategori']
		);
		$this->db->insert($this->tabel, $val);
	}

	function ubahData($data){
		$val = array(
			'id_buku' => $data['id_buku'],
			'judul_buku' => $data['judul_buku'],
			'tahun_terbit' => $data['tahun_terbit'],
			'stok' => $data['stok'],
			'no_isbn' => $data['no_isbn'],
			'id_pengarang' => $data['pengarang'],
			'id_penerbit' => $data['penerbit'],
			'id_kategori' => $data['kategori']
		);
		$this->db->where("id_buku",$data['id_buku'])->update($this->tabel, $val);
	}

	function filterData($filter_by,$keyword){

		if($keyword=='0'){
			return $this->db->get("v_buku");
		}else{
			return $this->db->like($filter_by,$keyword)
							->get("v_buku"); //posisi "get" harus berada di paling akhir,, get = from (group by, order by, dll diatas get)
		}
	}

	function filterMulti($keyword){

		if($keyword=='0'){
			return $this->db->get("v_buku");
		}else{
			return $this->db->or_like('id_buku',$keyword)
								 ->or_like('judul_buku',$keyword)
								 ->or_like('tahun_terbit',$keyword)
								 ->or_like('stok',$keyword)
								 ->or_like('no_isbn',$keyword)
								 ->or_like('nama_pengarang',$keyword)
								 ->or_like('nama_penerbit',$keyword)
								 ->or_like('kategori',$keyword)
							->get("v_buku");
		}
	}
}
