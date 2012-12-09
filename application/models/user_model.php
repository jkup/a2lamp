<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function add_user( $user )
    {
        $new_user = array(
            'id'    => $user->id,
            'link'  => $user->link,
            'name'  => $user->name,
            'photo' => $user->photo->thumb_link
        );
        
        $this->db->insert('users', $new_user);
        
        $user = $this->get_user( $user->id );
        
        return $user; 
    }
    
    public function get_user( $user_id )
    {
        $query = $this->db->get_where('users', array( 'id' => $user_id ));
        
        return $query->row(); 
    }
    
}