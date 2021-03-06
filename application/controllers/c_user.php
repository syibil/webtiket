<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->database();
		$jumlah_data = $this->m_crud->jumlah_data();
		$this->load->library('pagination');

		$config['base url'] = base_url(). 'admin.php/Admin/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_close'] = '<li>';
		$config['prev_tag_close'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$from = $this->url->segment(3);
		$this->pagination->initialize($config);
		$data['user'] = $this->m_crud->data($config['per_page'],$from);

		$this->load->view('v_headeradmin');
		$this->load->view('admin', $data);
		$this->load->view('v_footeradmin');
	}

public function tambah(){
	$op = $this->input->post('op');
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$fullname = $this->input->post('fullname');
	$password = $this->input->post('password');

	$data = array(
		'username' => $username,
		'fullname' => $fullname,
		'password' => md5($password)
		);

	if($op=="tambah"){
		$this->m_crud->tambah($data);
	}
	else{
		$this->m_crud->update($data);
	}
	redirect('Admin');
}
public function hapus($id){
	redirect('Admin');

	$this->m_crud->hapus($id);
}

public function edit($id){
	$data['op'] = 'edit';
	$data['sql'] = $this->m_crud->edit($id);

	$this->load->view('v_edit', $data);
}