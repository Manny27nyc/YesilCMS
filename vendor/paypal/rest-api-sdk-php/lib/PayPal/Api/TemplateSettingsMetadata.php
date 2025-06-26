/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class TemplateSettingsMetadata
 *
 * Settings Metadata per field in template
 *
 * @package PayPal\Api
 *
 * @property bool hidden
 */
class TemplateSettingsMetadata extends PayPalModel
{
    /**
     * Indicates whether this field should be hidden. default is false
     *
     * @param bool $hidden
     * 
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * Indicates whether this field should be hidden. default is false
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

}
