<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog_model extends CI_Model{
		public function show_blog($wid){
			$arr = array(
				'WRITER' => $wid,
				);
			$query = $this->db->get_where('t_blogs', $arr);
			return $query->result();
		}
		public function get_blog_by_id($id){
			$arr = array(
				'BLOG_ID' => $id,
				);
			$query = $this->db->get_where('t_blogs', $arr);
			return $query->row();
		}
		public function delete_blog_by_id($id){
			$arr = array(
				'BLOG_ID' => $id,
				);
			$query = $this->db->delete('t_blogs', $arr);
			return $query;
		}
		public function insert_blogs($time,$title,$con,$type){
			$id = $this->session->userdata('id');
			$arr = array(
				'ADD_TIME' => $time,
				'TITLE' => $title,
				'CONTENT' => $con,
				'WRITER' => $id,
				'CATALOG_ID' => $catalog,
				'IS_YOURS' => $type,
				'CLICK_RATE' => 0,
				'COMM_RATE' => 0,
				);
			$query = $this->db->insert('t_blogs', $arr);
			return $query;
		}
	}
 ?>