/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

$config['socket_type'] = 'tcp'; //`tcp` or `unix`
$config['socket']      = '/var/run/redis.sock'; // in case of `unix` socket type
$config['host']        = '127.0.0.1';
$config['password']    = '';
$config['port']        = 6379;
$config['timeout']     = 0;
