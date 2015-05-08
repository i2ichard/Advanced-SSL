<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calc extends CI_Controller{

	function __Construct(){
		parent::__Construct();
		$this->load->model('PostModel');
		$this->load->model('insert_model');
	}

	public function index()
	{
		$this->addition();
	}

	public function insertValues(){
		$data = array(
			'income' => $this->input->post('income'),
			'expense' => $this->input->post('expense')
		);
		
		$this->data['posts'] = $this->PostModel->getPosts();
		$this->insert_model->form_insert($data);
		$this->load->view('header_view');
		$this->load->view('calc_view', $this->data);
		$this->load->view('footer_view');
	}

	// public function updateValues()
	// {
	// 	$ths->load->model('')
	// }

	public function addition()
	{	
		$this->data['posts'] = $this->PostModel->getPosts();

		$data['title']='Calculator';


		$data['var1'] = "";
		$data['var2'] = "";

		$this->load->view('header_view', $data);
		$this->load->view('calc_view', $this->data, $data);
		$this->load->view('footer_view');
	}

}