/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Template $template
 */
class General extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function error404()
    {
        $data = array(
            'pagetitle' => $this->lang->line('tab_error'),
        );

        $this->template->build('404', $data);
    }

    public function maintenance()
    {
        $data = array(
            'pagetitle' => $this->lang->line('tab_maintenance'),
        );

        $this->template->build('maintenance', $data);
    }
}
