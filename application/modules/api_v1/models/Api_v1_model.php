/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property                     $multiRealm
 * @property General_model       $wowgeneral
 * @property CI_DB_query_builder $world
 */
class Api_v1_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->world = $this->load->database('world', true);
    }
}