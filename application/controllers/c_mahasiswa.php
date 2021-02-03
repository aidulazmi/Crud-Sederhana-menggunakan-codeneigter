<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_mahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_mahasiswa');
}
	public function index()
	{
		//menampilkan data keseluruhan
		$data['user'] = $this->m_mahasiswa->tampil_data()->result();
		$this->load->view('mahasiswa/v_d_mahasiswa',$data);
	}

	public function form_input(){
		$this->load->view('mahasiswa/v_i_mahasiswa');
		//memanggil form input
	}


	public function tambah(){

		//form dari input data (nama dari form input yang ada di view)
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$nim = $this->input->post('nim');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			
			'id_mahasiswa' => $id_mahasiswa,
			'nim' => $nim,
			'nama_lengkap' => $nama_lengkap,
			'jurusan' => $jurusan,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);
		$this->m_mahasiswa->input_data($data,'d_mahasiswa');
		redirect('c_mahasiswa');
	}



	function hapus($id_mahasiswa){
		$where = array('id_mahasiswa' => $id_mahasiswa);
		$this->m_mahasiswa->hapus_data($where,'d_mahasiswa');
		redirect('c_mahasiswa');
	
		}

	function p_edit($id_mahasiswa){

		$where = array('id_mahasiswa' => $id_mahasiswa);
		$data['user'] = $this->m_mahasiswa->edit_data($where,'d_mahasiswa')->result();
		$this->load->view('mahasiswa/v_e_mahasiswa',$data);
	}

	function simpan_edit(){
		//form dari input data (nama dari form input yang ada di view)
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$nim = $this->input->post('nim');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');


		$data = array(
			
			'nim' => $nim,
			'nama_lengkap' => $nama_lengkap,
			'jurusan' => $jurusan,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);

	$where = array(
		'id_mahasiswa' => $id_mahasiswa
	);

	$this->m_mahasiswa->update_data($where,$data,'d_mahasiswa');
		redirect('c_mahasiswa');
}


}