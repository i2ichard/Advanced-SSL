<?php

class Calc_model extends CI_Model{

	public function add($var1,$var2) {
		return $var1 + $var2;

	}

	public function sub($var1,$var2) {
		return $var1 - $var2;

	}

	function getAll(){
        $query = $this->db->query('SELECT income, expense FROM data');

        foreach($query->result() as $row)
        {
        	$income = $row->income;
        	$expense = $row->expense;

        	return $income;
        }

        

    }
}
