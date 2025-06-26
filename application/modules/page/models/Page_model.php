/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page_model extends CI_Model
{
    /**
     * Page_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getName($uri)
    {
        return $this->db->select('title')->where('uri_friendly', $uri)->get('pages')->row('title');
    }

    public function getDesc($uri)
    {
        return $this->db->select('description')->where('uri_friendly', $uri)->get('pages')->row('description');
    }

    public function getDate($uri)
    {
        return $this->db->select('date')->where('uri_friendly', $uri)->get('pages')->row('date');
    }

    public function getVerifyExist($uri): int
    {
        return $this->db->select('uri_friendly')->where('uri_friendly', $uri)->get('pages')->num_rows();
    }
}
