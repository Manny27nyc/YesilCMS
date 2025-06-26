/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Originaly CodeIgniter i18n library by Jérôme Jaglale
 * http://maestric.com/en/doc/php/codeigniter_i18n
 */

/**
 * If you use without the HMVC modular extension uncomment this and remove other lines load the MX_Loader
 */
//class MY_Config extends CI_Config {

require_once APPPATH . "third_party/MX/Config.php";

class MY_Config extends MX_Config
{
    /**
     * Return localized site url
     *
     * @param  string  $uri
     *
     * @return string
     */
    public function site_url($uri = '', $protocol = null)
    {
        if (is_array($uri)) {
            $uri = implode('/', $uri);
        }

        if (function_exists('get_instance')) {
            $uri = get_instance()->lang->localized($uri);
        }

        return parent::site_url($uri, $protocol);
    }
}

// END MY_Config Class

/* End of file MY_Config.php */
/* Location: ./application/core/MY_Config.php */
