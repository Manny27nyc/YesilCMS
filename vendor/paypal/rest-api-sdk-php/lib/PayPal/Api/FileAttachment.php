/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;
use PayPal\Validation\UrlValidator;

/**
 * Class FileAttachment
 *
 * File attached to an invoice or template
 *
 * @package PayPal\Api
 *
 * @property string name
 * @property string url
 */
class FileAttachment extends PayPalModel
{
    /**
     * Name of the file attached.
     *
     * @param string $name
     * 
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Name of the file attached.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * URL of the attached file that can be downloaded.
     *
     * @param string $url
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl($url)
    {
        UrlValidator::validate($url, "Url");
        $this->url = $url;
        return $this;
    }

    /**
     * URL of the attached file that can be downloaded.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

}
