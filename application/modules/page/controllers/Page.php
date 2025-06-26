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
 * @property Template      $template
 * @property Page_model    $page_model
 */
class Page extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_model');

        if (! ini_get('date.timezone')) {
            date_default_timezone_set($this->config->item('timezone'));
        }

        if ($this->wowgeneral->getMaintenance()) {
            redirect(base_url('maintenance'), 'refresh');
        }
    }

    public function index($uri)
    {
        if (empty($uri) || is_null($uri) || $uri == null) {
            redirect(base_url(), 'refresh');
        }

        if ($this->page_model->getVerifyExist($uri) < 1) {
            redirect(base_url(), 'refresh');
        }

        $data = array(
            'uri'       => $uri,
            'pagetitle' => $this->page_model->getName($uri),
        );

        $this->template->build('index', $data);
    }
}
