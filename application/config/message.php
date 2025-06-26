/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * @package WoWCMS
 * @version 1.0.4.4
 * @author  Sayghteihgt (Destroyer/Darthar)
 * @author  DzyWolf
 * @link    http://wow-cms.com
 */

/*

/*
 *  Enable announcement message
 *
 *  Whether or not to show the announcement message
 *
*/
$config["message_enabled"] = true;

/*
 *  Message headline
 *
 *  ["message_headline"] Announcement headline
 *  ["message_headline_size"] Size of the headline in px
 *
*/
$config["message_headline"]      = "Unauthorized copy!";
$config["message_headline_size"] = 56;

/*
 *  Message text
 *
*/
$config["message_text"]
    = "This copy of WoWCMS has not been registered in our licensing service <a href=\"http://wow-cms.com/\" style=\"text-decoration:none;color:white;\"> wow- cms .com </a>. To delete this message, go to Application/config/message.php and type false.";
