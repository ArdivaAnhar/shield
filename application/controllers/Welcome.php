<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public $crud;
	public $input;
	public $uri;
	public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	public function index(){
		$data['title'] = 'Home';
		$data['section'] = $this->load->view('index', '', TRUE);
		$this->load->view('layout', $data);
	}

	public function pinjaman(){
	$data['title'] = 'Pinjaman Buku';
    $this->load->model('crud');
    $data['pinjaman'] = $this->crud->getDataPinjaman();
    $data['section'] = $this->load->view('pinjam/pinjaman', $data, TRUE);

    $this->load->view('layout', $data);
	}

	public function add()
	{
		$add['nama'] = $this->input->post('nama');
		$add['id_user'] = $this->input->post('id_user');
		$add['kd_buku'] = $this->input->post('kd_buku');
		$add['buku'] = $this->input->post('buku');

		$this->crud->add('pinjambuku', $add);

		redirect(site_url('Welcome/pinjaman'));
	}
	public function update()
	{
		$kd_buku = $this->input->post('kd_buku');

		$update['nama'] = $this->input->post('nama');
		$update['id_user'] = $this->input->post('id_user');
		$update['buku'] = $this->input->post('buku');

		$this->crud->update('pinjambuku', 'kd_buku', $kd_buku, $update);

		redirect(site_url('Welcome/pinjaman'));
	}

	public function delete(){
		$dlt = $this->uri->segment(3);

		$this->crud->delete('pinjambuku', 'kd_buku', $dlt);

		redirect(site_url('Welcome/pinjaman'));
	}
}