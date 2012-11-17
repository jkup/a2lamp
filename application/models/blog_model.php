<?php

class Blog_model extends CI_Model {

	function get_posts()
	{
		$this->db->from('blog');
		$this->db->order_by("id", "desc");
        $query = $this->db->get();
		return $query;
	}

	function insert_post($post_data)
	{
		$data = array(
		   'title'   => $post_data['title'],
		   'content' => $post_data['content']
		);

		$this->db->insert('blog', $data); 
	}
	
}
