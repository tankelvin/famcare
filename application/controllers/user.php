<?php 
	/**
	 * 
	 */
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');		
		}

		public function index()
		{
			$data_user = $this->user_model->select();
			$data['user']=$data_user;
			$this->load->view('user/list', $data);
		}

		public function delete($user_id)
		{
			$this->user_model->delete($user_id);
			redirect(site_url('user'));
		}

		public function update($user_id)
		{
			$user=$this->db->where('user_id',$user_id)->get('user')->row();
			$data['user']=$user;
			$this->load->view('user/form',$data);
		}		

		public function insert()
		{
			$this->load->view('user/form');
		}	

		public function insert_aksi()
		{
			$user_id=$this->input->post('user_id');
			$username=$this->input->post('username');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$data_user=array('username'=>$username,'email'=>$email,'password'=>$password);
			if($user_id=="") {
				$this->user_model->insert($data_user);
				redirect(site_url('user'));
			}
			else{
				$this->user_model->update($data_user,$user_id);
				redirect(site_url('user'));
			}
		}	
	}
?>