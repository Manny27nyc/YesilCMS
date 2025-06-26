/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property $multirealm
 */
class Online_model extends CI_Model
{
    /**
     * Online_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getOnlinePlayers($MultiRealm)
    {
        $this->multirealm = $MultiRealm;

        return $this->multirealm->select('guid, name, race, class, gender, level, zone')->where('online', '1')->order_by('name', 'DESC')->get('characters');
    }
}
