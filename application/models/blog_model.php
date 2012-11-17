<?php

class Blog_model extends CI_Model {

	function get_posts()
	{
        $query = $this->db->get('blog');
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
