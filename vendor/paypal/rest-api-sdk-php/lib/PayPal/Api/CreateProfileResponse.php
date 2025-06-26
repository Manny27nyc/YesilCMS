/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPal\Api;

/**
 * Class CreateProfileResponse
 *
 * Response schema for create profile api
 *
 * @package PayPal\Api
 *
 * @property string id
 */
class CreateProfileResponse extends WebProfile
{
    /**
     * ID of the payment web experience profile.
     * 
     *
     * @param string $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * ID of the payment web experience profile.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

}
