<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_topics extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ),
            'description' => array(
                'type'           => 'VARCHAR',
                'constraint'     => 1000
            ),
            'created' => array(
                'type'           => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
            ),
            'user_id' => array(
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => TRUE
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('created');

        $this->dbforge->create_table('topics');
    }

    public function down()
    {
        $this->dbforge->drop_table('topics');
    }

}