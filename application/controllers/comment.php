<?php 
	/**
	 * 
	 */
	class Comment extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('comment_model');		
		}

		public function index()
		{
			$data_user = $this->comment_model->select();
			$data['comment']=$data_user;
			$this->load->view('comment/list', $data);
		}

		public function delete($comment_id)
		{
			$this->comment_model->delete($comment_id);
			redirect(site_url('comment'));
		}

		public function update($comment_id)
		{
			$comment=$this->db->where('comment_id',$comment_id)->get('comment')->row();
			$data['comment']=$comment;
			$this->load->view('comment/form',$data);
		}		

		public function insert()
		{
			$this->load->view('comment/form');
		}	

		public function insert_aksi()
		{
			$comment_id=$this->input->post('comment_id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$message=$this->input->post('message');
			$data_user=array('name'=>$name,'email'=>$email,'message'=>$message);
			if($comment_id=="") {
				$this->comment_model->insert($data_user);
				redirect(site_url('comment'));
			}
			else{
				$this->comment_model->update($data_user,$comment_id);
				redirect(site_url('comment'));
			}
		}	
	}
?>