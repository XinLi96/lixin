<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('blog_model');
		}
		public function index(){
			$wid = $this->session->userdata('id');
			$result = $this->blog_model->show_blog($wid);
			$arr['res'] = $result;
			$this->load->view('index_logined.php', $arr);
		}
		public function ind(){
			$this->load->view('index.php');
		}
		public function do_inbox(){
			$this->load->view('inbox.php');
		}
		public function view_blog(){
			$id = $this->uri->segment(3);
			$this->db->set('CLICK_RATE', 'CLICK_RATE+1', FALSE);
			$this->db->where('BLOG_ID', $id);
			$this->db->update('t_blogs'); 
			$result = $this->blog_model->get_blog_by_id($id);
			$arr['result'] = $result;
			$this->load->view('viewPost_comment.php', $arr);
		}
		public function del_blog(){
			$id = $this->uri->segment(3);
			$result = $this->blog_model->delete_blog_by_id($id);
			if($result){
				echo "<script>alert('删除成功')</script>";
				redirect('blog/index');
			}else{
				echo "<script>alert('删除失败')</script>";
				redirect('blog/index');
			}
		}
		public function insert_blog(){
			$this->load->view('newBlog.php');
		}
		public function inse_blog(){
			$time = date('Y').'-'.date('m').'-'.date('d').'&nbsp;'.date('G').':'.date('i').':'.date('s');
			$title = $this->input->post('title');
			$con = $this->input->post('content');
			$catalog = $this->input->post('catalog');
			$type = $this->input->post('type');
			$origin_url = $this->input->post('origin_url');
			$privacy = $this->input->post('privacy');
			// var_dump($type);
			// die();
			$result = $this->blog_model->insert_blogs($time,$title,$con,$type);
			if($result){
				redirect('blog/index');
			}else{
				echo "<script>alert('发表失败')</script>";
				redirect('blog/index');
			}
		}
	}
 ?>