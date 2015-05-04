<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!="")) // it looks like you already have username in there make sure you have it for id too
		{
			$this->welcome();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view.php", $data);
			$this->load->view('footer_view',$data);
		}
	}
	public function welcome()
	{
		$data['title']= 'Money$mart';

//		$this->load->method('Math', $data);
		$this->load->view('header_view',$data);
		//i guess after user submits the information?
		//insude the income textbox
		//yes
		// if they submitted previously did you wanted it to prepopulate too?
		// if data was not previously submitted, it should just be blank


		// ok then before you pass the data below
		// did that answer you questions?
		// Yes that helps a lot thanks, Next month I only teach online so we can do this all the time durng the day. Ok sounds good
		//$data["usedata"] = $this->user_model->getUserData($this->session->userdata('user_id'));// in this case its 2 for richard So should I 
		// have a seperate table for sessions.. ci_session?no

		// or something like that
		// this will get the information and send it to the view
		// I see can i show you my database?yes  you are missing the link between the two tables
		// yes?
		// what is the $this->session part? You want to get inforation for the current logged in user right?yes Do you set the userid in the
		// session? Oh ok I understand now
		$this->load->view('welcome_view.php', $data);
		$this->load->view('footer_view',$data);

	}


	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	public function thank()
	{
		$data['title']= 'Thank you';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php', $data);
		$this->load->view('footer_view',$data);
	}
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->user_model->add_user();
			$this->thank();
		}
	}
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
}
?>