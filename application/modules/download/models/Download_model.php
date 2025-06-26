/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Download_model extends CI_Model
{
    /**
     * Download_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getGame(): CI_DB_result
    {
        return $this->db->select('*')->where('category', '1')->order_by('id', 'ASC')->get('download');
    }

    public function getAddons(): CI_DB_result
    {
        return $this->db->select('*')->where('category', '2')->order_by('id', 'ASC')->get('download');
    }
}
