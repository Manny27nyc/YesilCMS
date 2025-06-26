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
class Migration_alter_store_top extends CI_Migration
{
    public function up()
    {
        $this->dbforge->modify_column('store_top', array(
            'id_store' => array(
                'name'       => 'store_item',
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'unique'     => true
            ),
        ));
    }

    public function down()
    {
        $this->dbforge->modify_column('store_top', array(
            'store_item' => array(
                'name'       => 'id_store',
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'unique'     => false
            ),
        ));
    }
}
