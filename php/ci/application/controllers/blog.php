<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('blog_model');
 	}
 	public function index(){
 		// $this->load->model('blog_model');
 		$rs = $this->blog_model->get_artical();
 		$arr['blog'] = $rs;
 		// var_dump($arr);
 		// die();
 		$this->load->view('index.php', $arr);
 	}
 	public function del(){
 		$id = $this->uri->segment(3);
 		$result = $this->blog_model->del_blog($id);
 		if($result){
 			redirect('blog/index');
 		}else{
 			echo "<script>删除失败</script>";
 		}
 	}
 	public function edi(){
 		$id = $this->uri->segment(3);
 		$result = $this->blog_model->edi_show($id);
 		// var_dump($result);
 		// die();
 		$arr['show'] = $result;
 		$this->load->view('edit_show.php', $arr);
 	}
 	public function do_edit(){
 		$con = $this->input->post('con');
 		$id = $this->input->post('id');
 		$result = $this->blog_model->edi_blog($id,$con);
 		if($result){
 			redirect('blog/index');
 		}else{
 			echo "<script>alert('更新失败')</script>";
 			redirect('blog/index');
 		}
 	}
 	public function insert(){
 		$this->load->view('inser_blog.php');
 	}
 	public function do_insert(){
 		$title = $this->input->post('title');
 		$con = $this->input->post('con');
 		$leibie = $this->input->post('leibie');
 		$result = $this->blog_model->insert_blog($title,$con,$leibie);
 		if($result){
 			redirect('blog/index');
 		}else{
 			echo "<script>alert('发表失败')</script>";
 			redirect('blog/index');
 		}
 	}
 	public function chakan(){
 		$id = $this->uri->segment(3);
 		$result = $this->blog_model->chakan_blog($id);
 		$arr['blog'] = $result;
 		$this->load->view('chakan.php',$arr);
 	}
 }
 ?>