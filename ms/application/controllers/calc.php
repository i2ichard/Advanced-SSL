<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calc extends CI_Controller{

	public function index()
	{
		$this->addition();
	}

	public function addition()
	{	

		$data['title']='Calculator';
		$data['var1']="";
		$data['var2']="";

		$this->load->model('calc_model');
		$data['add']=$this->calc_model->add($data['var1'], $data['var2']);

		$this->load->model('calc_model');
		$data['sub']=$this->calc_model->sub($data['var2'], $data['var1']);

		$this->load->view('header_view', $data);
		$this->load->view('calc_view');
		$this->load->view('footer_view');
	}
}