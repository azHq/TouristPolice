<?php
class Transport_Model extends CI_Model{

	public function add_transport($data){

		return $this->db->insert('transport_table',$data);
	}

	public function getTransportList(){

		return $this->db->get('transport_table')->result();
	}

	public function delete($id){

		$this->db->where('id',$id);
		return $this->db->delete('transport_table');
	}

}