<?php 
	/**
	 * 
	 */
	class Comment extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');		
		}

		public function index()
		{
			$data_user = $this->user_model->select();
			$data['comment']=$data_user;
			$this->load->view('comment/list', $data);
		}

		public function delete($user_id)
		{
			$this->user_model->delete($user_id);
			redirect(site_url('comment'));
		}

		public function update($user_id)
		{
			$user=$this->db->where('comment_id',$user_id)->get('comment')->row();
			$data['user']=$user;
			$this->load->view('comment/form',$data);
		}		

		public function insert()
		{
			$this->load->view('comment/form');
		}	

		public function insert_aksi()
		{
			$user_id=$this->input->post('comment_id');
			$username=$this->input->post('name');
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