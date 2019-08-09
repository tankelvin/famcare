<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function homeadmin()
	{
		$this->load->view('homeadmin');
	}

	public function cek_login()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$cek_login=$this->user_model->login($email,$password);

		if (empty($cek_login)) {
			redirect ("/");
		}
		else
		{
			//echo "Berhasil Login";
			if($email=="admin@admin" AND $password=="admin"){
				redirect(site_url('Welcome/homeadmin'));
			}
			else{
				redirect(site_url('Welcome/home'));
			}
		}
	}

	public function register()
	{
		if($this->input->post())
		{
			$username=$this->input->post("username");
			$email=$this->input->post("email");
			$password=$this->input->post("password");
			$data_inputan = array(	'username' => $username, 
									'email'=> $email,
									'password'=>$password);
			$this->user_model->insert($data_inputan);
			redirect('/');
		}else{
			$this->load->view("login");
		}
	}

	public function courses()
	{
		$this->load->view('courses');
	}

	public function article()
	{
		$this->load->view('article');
	}

	public function article3()
	{
		$this->load->view('article3');
	}

	public function article2()
	{
		$this->load->view('article2');
	}

	public function article4()
	{
		$this->load->view('article4');
	}


	public function contact()
	{
		$this->load->view('contact');
	}

	public function todolist()
	{
		$this->load->view('todolist');
	}

	public function article1()
	{
		$this->load->view('article1');
	}

	public function comment()
	{
		$this->load->view('comment');
	}

	public function user()
	{
		$this->load->view('user');
	}
}
