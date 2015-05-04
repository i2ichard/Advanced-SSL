<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 4/22/15
 * Time: 2:28 PM
 */


class Get extends CI_Model{
    function getAll(){
        $query = $this->db->query('SELECT income, expense FROM data');

        foreach($query->result() as $row){
        	$income = $row->income;
        	$expense = $row->expense;

        	return $query->num_rows();
        }

        

    }
}