<?php 
	/**
	 * 
	 */
	class comment_model extends CI_Model
	{
		
		public function login($email,$password)
		{
			return $this->db->query("select * from comment where 
				email='".$email."' 
				and password='".$password."'")->row();
		}

		public function insert($data)
		{
			$this->db->insert('comment',$data);
		}

		public function select()
		{
			return $this->db->get('comment')->result();
		}

		public function delete($comment_id)
		{
			$this->db->where('comment_id',$comment_id);
			$this->db->delete('comment');
		}

		public function update($data,$comment_id)
		{	
			$this->db->where('comment_id',$comment_id);
			$this->db->update('comment',$data);
		}
	}
 ?>