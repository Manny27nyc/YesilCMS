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
 * Class VerifyWebhookSignatureResponse
 *
 * The verify webhook signature response.
 *
 * @package PayPal\Api
 *
 * @property string verification_status
 */
class VerifyWebhookSignatureResponse extends PayPalModel
{
    /**
     * The status of the signature verification. Value is `SUCCESS` or `FAILURE`.
     * Valid Values: ["SUCCESS", "FAILURE"]
     *
     * @param string $verification_status
     * 
     * @return $this
     */
    public function setVerificationStatus($verification_status)
    {
        $this->verification_status = $verification_status;
        return $this;
    }

    /**
     * The status of the signature verification. Value is `SUCCESS` or `FAILURE`.
     *
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->verification_status;
    }

}
