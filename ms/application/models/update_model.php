<?php


class Update_model extends CI_Model{

	public function upddata($data){
		$this->db->update('income', $income);
		$this->db->update('expense', $expense);
	}



}