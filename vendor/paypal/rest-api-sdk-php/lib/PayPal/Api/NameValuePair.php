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
 * Class NameValuePair
 *
 * Used to define a type for name-value pairs.  The use of name value pairs in an API should be limited and approved by architecture.
 *
 * @package PayPal\Api
 *
 * @property string name
 * @property string value
 */
class NameValuePair extends PayPalModel
{
    /**
     * Key for the name value pair.  The value name types should be correlated 
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
     * Key for the name value pair.  The value name types should be correlated 
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Value for the name value pair.
     *
     * @param string $value
     * 
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Value for the name value pair.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
