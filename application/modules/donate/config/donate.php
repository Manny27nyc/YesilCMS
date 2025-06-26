/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * PayPal Currency
 *
 * Check the available currencies in:
 * https://developer.paypal.com/docs/classic/api/currency_codes/
 *
 */
$config['paypal_currency'] = 'USD';

/**
 *
 * PayPal Mode
 *
 * Options Available:
 *
 * sandbox = Testing the code end-to-end
 * live    = Ready for production
 *
 */
$config['paypal_mode'] = 'sandbox';

/**
 *
 * PayPal Client ID
 *
 * Check your client id in:
 * https://developer.paypal.com/developer/applications
 *
 */
$config['paypal_userid'] = 'AeEKmkcWH_NGf5Uxkoos5ESv3fffSBnlC1b-BJTAUF2vP02Klwa_IXXzUKqtP1tGZHF_gCRPjNjyBo7V';

/**
 *
 * PayPal Secret Password
 *
 * Check your secret password in:
 * https://developer.paypal.com/developer/applications
 *
 */
$config['paypal_secretpass'] = 'EEaly2bYOVTbv1hsMPesPESGF-fFyFm_HMWij_0mFiiRAEibc-SdSeqCMPFlF0ziuzsZXNcBXxecsn2V';

/**
 *
 * PayPal Currency Symbol
 *
 * Write the symbol of currency used in paypal
 *
 */
$config['paypal_currency_symbol'] = '$';

$config['paypal_client'] = 'AeEKmkcWH_NGf5Uxkoos5ESv3fffSBnlC1b-BJTAUF2vP02Klwa_IXXzUKqtP1tGZHF_gCRPjNjyBo7V';

$config['paypal_password'] = 'EEaly2bYOVTbv1hsMPesPESGF-fFyFm_HMWij_0mFiiRAEibc-SdSeqCMPFlF0ziuzsZXNcBXxecsn2V';
