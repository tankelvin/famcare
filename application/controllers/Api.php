<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: *");
	}
	//Menampilkan data user
	function user_get($user_id='')
	{
		if($user_id=='') 
			$user = $this->db->get('user')->result();
		else{
			$this->db->where('user_id', $user_id);
			$user = $this->db->get('user')->result();
		}
		$this->response($user, 200);
	}

	 function comment_get($comment_id='')
	{
		if($comment_id=='') 
			$comment = $this->db->get('comment')->result();
		else{
			$this->db->where('comment_id', $comment_id);
			$comment = $this->db->get('comment')->result();
		}
		$this->response($comment, 200);
	}

	
	function user_post()
	{
		$data = array(
			    'username' => $this->post('username'),
				'email' => $this->post('email'),
				'password' => $this->post('password'));
		$insert = $this->db->insert('user', $data);
		if($insert){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function comment_post()
	{
		$data = array(
				'name' => $this->post('name'),
				'email' => $this->post('email'),
				'message' => $this->post('message'));
		$insert = $this->db->insert('comment', $data);
		if($insert){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function user_put()
	{
		$user_id = $this->put('user_id');
		$data = array(
					'user_id' => $this->put('user_id'),
					 'username' => $this->put('username'),
					'email' => $this->put('email'),
					'password' => $this->put('password'));
		$this->db->where('user_id', $user_id);
		$update = $this->db->update('user', $data);
		if($update){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function comment_put()
	{
		$comment_id = $this->put('comment_id');
		$data = array(
					'comment_id' => $this->put('comment_id'),
					'name' => $this->put('name'),
					'email' => $this->put('email'),
					'message' => $this->put('message'));
		$this->db->where('comment_id', $comment_id);
		$update = $this->db->update('comment', $data);
		if($update){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	} 
	function user_delete()
	{
		$user_id = $this->delete('user_id');
		$this->db->where('user_id', $user_id);
		$delete = $this->db->delete('user');
		if($delete){
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail'), 502);
		}
	}
	
	function comment_delete()
	{
		$comment_id = $this->delete('comment_id');
		$this->db->where('comment_id', $comment_id);
		$delete = $this->db->delete('comment');
		if($delete){
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail'), 502);
		}
	} 
}
?>