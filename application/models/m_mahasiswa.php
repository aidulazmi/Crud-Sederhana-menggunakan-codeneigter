<?php 

class m_mahasiswa extends CI_Model{

	
	function tampil_data(){
		return $this->db->get('d_mahasiswa');
		//menampikan data
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
		//menambah data
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		//menghapus data
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
		//memanggil data berdasarkan data id yang ingin dirubah
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);

		//merubah data
	}	

}