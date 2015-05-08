<?php

class PostModel extends CI_Model {

	function getPosts(){
		$this->db->select("income, expense");
		$this->db->from('data');

		$query = $this->db->get();
		
		return $query->result();
	}
}