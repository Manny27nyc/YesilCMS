/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property General_model  $wowgeneral
 * @property Timeline_model $timeline_model
 * @property Template       $template
 * @property Module_model   $wowmodule
 */
class Timeline extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('timeline_model');

        if ($this->wowgeneral->getMaintenance()) {
            redirect(base_url('maintenance'), 'refresh');
        }

        if (! $this->wowmodule->getTimelineStatus()) {
            redirect(base_url(), 'refresh');
        }
    }

    public function index()
    {
        $timeline = $this->timeline_model->getTimeline();

        if (! $timeline) {
            redirect(base_url(), 'refresh');
        }

        $data = array(
            'pagetitle' => 'Timeline',
            'title'     => $this->config->item('website_name'),
            'subtitle'  => $this->lang->line('timeline_subtitle'),
            'timeline'  => $timeline
        );

        $this->template->build('index', $data);
    }
}
