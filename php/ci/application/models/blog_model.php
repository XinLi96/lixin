<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Blog_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function get_artical(){
			$query = $this->db->get('blog');

			return $query->result();
		}
		public function del_blog($id){
			$query = $this->db->delete('blog', array('blogid' => $id));
			return $query;
		}
		public function edi_show($id){
			$query = $this->db->get_where('blog', array('blogid' => $id));
			return $query->row();
		}
		public function edi_blog($id,$con){
			$data = array(
				'content' => $con,
				);
			$query = $this->db->update('blog', $data, "blogid = '$id'");
			return $query;
		}
		public function insert_blog($title,$con,$leibie){
			$data = array(
				'title' => $title,
				'content' => $con,
				'cate' => $leibie,
				'time' => 'now()',
				);
			$query = $this->db->insert('blog', $data);
			return $query;
		}
		public function chakan_blog($id){
			$this->db->set('hits', 'hits+1', FALSE);
			$this->db->where('blogid', $id);
			$this->db->update('blog');
			$query = $this->db->get_where('blog', array('blogid' => $id));
			return $query->row();
		}
	}
 ?>