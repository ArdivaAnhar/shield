<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Model
{

	function add($tabel, $data = array())
	{
		$this->db->insert($tabel, $data);
	}

	function update($tabel, $fieldid, $fieldvalue, $data = array())
	{
		$this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
	}

	function delete($tabel, $fieldid, $fieldvalue)
	{
		$this->db->where($fieldid, $fieldvalue)->delete($tabel);
	}

	function GetData($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();
	}

	function GetDataWhere($tabel, $id, $nilai)
	{
		$this->db->where($id, $nilai);
		$query = $this->db->get($tabel);
		return $query;
	}

	public function getDataPinjaman()
	{
		$query = $this->db->get('pinjambuku');
		return $query->result();
	}

	public function cari($judul)
	{
		$this->db->where('jdl_buku', $judul);
		$query = $this->db->get('cari');
		return $query->result();
	}
}