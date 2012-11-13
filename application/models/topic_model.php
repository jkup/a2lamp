<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic_model extends CI_Model {
    
    public function get_topics()
    {
        $topics = array();

        $query = $this->db->get('topics');

        foreach ( $query->result() as $topic ) {
            $topics[] = $topic;
        }
        
        return $topics;
    }
    
    public function get_topic( $topic_id )
    {
        $query = $this->db->get_where('topics', array( 'id' => $topic_id ), 1);

        return $query->row(); 
    }
    
    public function create_topic( $new_topic )
    {        
        $this->db->insert('topics', $new_topic);
        
        return $this->db->insert_id();
    }
    
}