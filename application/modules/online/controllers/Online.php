/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property General_model $wowgeneral
 * @property Realm_model   $wowrealm
 * @property Template      $template
 */
class Online extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('online_model');

        if (! ini_get('date.timezone')) {
            date_default_timezone_set($this->config->item('timezone'));
        }

        if ($this->wowgeneral->getMaintenance()) {
            redirect(base_url('maintenance'), 'refresh');
        }
    }

    public function index()
    {
        $data = array(
            'pagetitle' => $this->lang->line('tab_online'),
            'realms'    => $this->wowrealm->getRealms()->result()
        );

        $this->template->build('index', $data);
    }
}
