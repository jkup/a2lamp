<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_votes extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'topic_id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            ),
            'user_id' => array(
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => TRUE
            ),
            'added' => array(
                'type'           => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
            )
        ));
        
        $this->dbforge->add_key('topic_id', TRUE);
        $this->dbforge->add_key(array( 'topic_id', 'user_id' ));

        $this->dbforge->create_table('votes');
    }

    public function down()
    {
        $this->dbforge->drop_table('votes');
    }

}