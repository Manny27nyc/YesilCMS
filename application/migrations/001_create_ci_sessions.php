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
class Migration_create_ci_sessions extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id'         => array(
                'type'           => 'VARCHAR',
                'constraint'     => '40',
                'unsigned'       => true,
                'auto_increment' => true
            ),
            'ip_address' => array(
                'type'       => 'VARCHAR',
                'constraint' => '45'
            ),
            'timestamp'  => array(
                'type'       => 'INT',
                'constraint' => '10'
            ),
            'data'       => array(
                'type' => 'BLOB'
            ),
        ));
        $this->dbforge->add_key('ci_sessions', true);
        $this->dbforge->create_table('ci_sessions');
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}
