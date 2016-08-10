<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model{
		public function login($email, $pass){
			$arr = array(
				'ACCOUNT' => $email,
				'PASSWORD' => $pass,
				);
			$query = $this->db->get_where('t_users', $arr);
			return $query->row();
		}

		public function get_name_by_email($email){
			$arr = array(
				'ACCOUNT' => $email,
				);
			$query = $this->db->get_where('t_users', $arr);
			return $query->row();
		}
		public function reg_a_user($email,$name,$pass,$gender,$province){
			$arr = array(
				'USER_ID' => null,
				'ACCOUNT' => $email,
				'PASSWORD' => $pass,
				'NAME' => $name,
				'PROVINCE' => $province,
				'GENDER' => $gender,
				);
			$query = $this->db->insert('t_users', $arr);
			return $query;
	}
 }
 ?>