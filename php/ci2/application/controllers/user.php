<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		public function reg(){
			$this->load->view('reg.php');
		}
		public function do_reg(){
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$pass = $this->input->post('pwd');
			$repass = $this->input->post('pwd2');
			$gender = $this->input->post('gender');
			$province = $this->input->post('province');
			$result = $this->user_model->get_name_by_email($email);
			if($result){
				echo "<script>alert('用户已存在，请重新输入！')</script>";
			}else{
				if($pass != $repass){
					echo "两次密码不同，请重新输入！";
					// redirect('user/reg');
				}else{
					$res = $this->user_model->reg_a_user($email,$name,$pass,$gender,$province);
					
					if($res){
						$this->load->view('login.php');
					}else{
						echo "<script>alert('注册失败，请重新输入！')</script>";
					}
				}
			}
		}
		public function login(){
			$this->load->view('login.php');
		}
		public function do_login(){
			$email = $this->input->post('email');
			$pass = $this->input->post('pwd');
			$result = $this->user_model->login($email, $pass);
			if($result){
				$arr = array(
				'id' => $result->USER_ID,
				'name' => $result->NAME,
					);
				$this->session->set_userdata($arr);
				redirect('blog/index');

			}else{
				echo 123;
			}
		}
	}
 ?>