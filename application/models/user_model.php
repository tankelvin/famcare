<?php 
	/**
	 * 
	 */
	class user_model extends CI_Model
	{
		
		public function login($email,$password)
		{
			return $this->db->query("select * from user where 
				email='".$email."' 
				and password='".$password."'")->row();
		}

		public function insert($data)
		{
			$this->db->insert('user',$data);
		}

		public function select()
		{
			return $this->db->get('user')->result();
		}

		public function delete($user_id)
		{
			$this->db->where('user_id',$user_id);
			$this->db->delete('user');
		}

		public function update($data,$user_id)
		{	
			$this->db->where('user_id',$user_id);
			$this->db->update('user',$data);
		}
	}
 ?>