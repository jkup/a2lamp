<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => TRUE
            ),
            'link' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'name' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255
            ),
            'photo' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255
            )
        ));
        
        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }

}