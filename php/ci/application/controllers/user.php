<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		public function index(){
			// echo 123;
		}
		public function reg(){
			$this->load->view('reg.php');
		}
		public function do_reg(){
			// echo 123456;
			$name = $this->input->post('username');
			$pass = $this->input->post('pass'); 
			// echo $name.'||'.$pass;
			$result = $this->user_model->insert($name,$pass);
			if($result){
				redirect('user/login');
			}else{
				redirect('user/reg');
			}
		}
		public function login(){
			// echo 123456789;
			$this->load->view('login.php');
		}
		public function do_login(){
			$name = $this->input->post('username');
			$pass = $this->input->post('pass'); 
			$result = $this->user_model->get_name_by_pass($name,$pass);
			// var_dump($result);
			// die();
			if($result){
				$arr = array(
					'id' => $result->userid,
					'name' => $result->name,
					);
				// var_dump($arr);
				// die();
				$this->session->set_userdata($arr);
				redirect('blog/index');
			}else{
				echo 123;
			}
		}
	}
 ?>