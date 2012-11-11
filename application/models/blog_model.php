<?php

class Blog_model extends CI_Model {

	function get_posts()
	{
        $query = $this->db->get('blog');
		return $query;
	}
	
}
