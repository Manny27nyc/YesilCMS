/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge $dbforge
 */
class Migration_create_password_reset extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'email' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false
            ),
            'hash'  => array(
                'type'       => 'VARCHAR',
                'constraint' => '64',
                'null'       => false
            ),
            'date'  => array(
                'type'       => 'INT',
                'constraint' => '10',
                'default'    => null,
                'unsigned'   => true,
            )
        ));
        $this->dbforge->create_table('users_password_resets');

        // Add Index
        $this->db->query('CREATE INDEX idx_email ON users_password_resets (email);');
    }

    public function down()
    {
        $this->dbforge->drop_table('users_password_resets');
    }
}
