/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*Navbar Lang*/
$lang['admin_nav_dashboard']       = 'Tableau de bord';
$lang['admin_nav_system']          = 'Systeme';
$lang['admin_nav_manage_settings'] = 'Gérer les Paramètres';
$lang['admin_nav_manage_modules']  = 'Gérer les Modules';
$lang['admin_nav_users']           = 'Utilisateurs';
$lang['admin_nav_accounts']        = 'Comptes';
$lang['admin_nav_website']         = 'Site Internet';
$lang['admin_nav_menu']            = 'Menu';
$lang['admin_nav_realms']          = 'Royaumes';
$lang['admin_nav_slides']          = 'Slides';
$lang['admin_nav_news']            = 'Actualités';
$lang['admin_nav_changelogs']      = 'Changelogs';
$lang['admin_nav_pages']           = 'Pages';
$lang['admin_nav_donate_methods']  = 'Méthodes de payements';
$lang['admin_nav_topsites']        = 'Topsites';
$lang['admin_nav_donate_logs']     = 'Journaux de dons';
$lang['admin_nav_vote_logs']       = 'Journaux de vote';
$lang['admin_nav_store_logs']      = 'Store Logs';
$lang['admin_nav_system_logs']     = 'Logs';
$lang['admin_nav_store']           = 'Store';
$lang['admin_nav_manage_store']    = 'Gérer la Boutique';
$lang['admin_nav_forum']           = 'Forum';
$lang['admin_nav_manage_forum']    = 'Gérer le Forum';
$lang['admin_nav_logs']            = 'Logs du Systeme';
$lang['admin_nav_download']        = 'Téléchargement';
$lang['admin_nav_Tickets']         = 'Tickets';
$lang['admin_nav_manage_tickets']  = 'Gérer le Tickets';
$lang['admin_nav_timeline']        = 'Timeline';

/*Sections Lang*/
$lang['section_general_settings']  = 'Réglages Généraux';
$lang['section_module_settings']   = 'Paramètres de Module';
$lang['section_optional_settings'] = 'Paramètres Optionnelles';
$lang['section_seo_settings']      = 'Paramètres de Référencement';
$lang['section_update_cms']        = 'Mettre à jour le CMS';
$lang['section_check_information'] = 'Vérifier les Informations';
$lang['section_forum_categories']  = 'Catégories de Forums';
$lang['section_forum_elements']    = 'Éléments du Forum';
$lang['section_store_categories']  = 'Catégories de la Boutique';
$lang['section_store_items']       = 'Items de la Boutique';
$lang['section_store_top']         = 'TOP Items de la Boutique';
$lang['section_logs_dp']           = 'Logs des donations';
$lang['section_logs_vp']           = 'Logs des votes';

/*Button Lang*/
$lang['button_select']         = 'Sélectionner';
$lang['button_update']         = 'Mettre à jour';
$lang['button_unban']          = 'Deban';
$lang['button_ban']            = 'Bannir';
$lang['button_remove']         = 'Supprimer';
$lang['button_grant']          = 'Accorder';
$lang['button_update_version'] = 'Mettre à jour vers la dernière version';

/*Table header Lang*/
$lang['table_header_subcategory'] = 'Sélectionnez une sous-catégorie';
$lang['table_header_race']        = 'Race';
$lang['table_header_class']       = 'Classe';
$lang['table_header_level']       = 'Niveau';
$lang['table_header_money']       = 'Or';
$lang['table_header_time_played'] = 'Temps de jeu';
$lang['table_header_actions']     = 'Actions';
$lang['table_header_id']          = '#ID';
$lang['table_header_tax']         = 'Taxe';
$lang['table_header_points']      = 'Points';
$lang['table_header_type']        = 'Type';
$lang['table_header_module']      = 'Module';
$lang['table_header_payment_id']  = 'ID de Payment';
$lang['table_header_hash']        = 'Hash';
$lang['table_header_total']       = 'Total';
$lang['table_header_create_time'] = 'Créer du temps';
$lang['table_header_guid']        = 'Guid';
$lang['table_header_information'] = 'Information';
$lang['table_header_value']       = 'Valeur';
$lang['table_header_patch']       = 'Patch';
$lang['table_header_date']        = 'Date';
$lang['table_header_image']       = 'Image';
$lang['table_header_order']       = 'Order';

/*Input Placeholder Lang*/
$lang['placeholder_manage_account']      = 'Gérer les Comptes';
$lang['placeholder_update_information']  = 'Mettre à jour les informations du compte';
$lang['placeholder_donation_logs']       = 'Logs des Donations';
$lang['placeholder_store_logs']          = 'Logs de la Boutique';
$lang['placeholder_create_changelog']    = 'Créer un Changelog';
$lang['placeholder_edit_changelog']      = 'Editer un Changelog';
$lang['placeholder_create_category']     = 'Créer Categorie';
$lang['placeholder_edit_category']       = 'Editer une Categorie';
$lang['placeholder_create_forum']        = 'Créer un Forum';
$lang['placeholder_edit_forum']          = 'Editer un Forum';
$lang['placeholder_create_menu']         = 'Créer un Menu';
$lang['placeholder_edit_menu']           = 'Editer un Menu';
$lang['placeholder_create_news']         = 'Créer une Actualités';
$lang['placeholder_edit_news']           = 'Editer une Actualités';
$lang['placeholder_create_page']         = 'Créer une Page';
$lang['placeholder_edit_page']           = 'Editer une Page';
$lang['placeholder_create_realm']        = 'Créer un Royaume';
$lang['placeholder_edit_realm']          = 'Editer un Royaume';
$lang['placeholder_create_slide']        = 'Créer un Slide';
$lang['placeholder_edit_slide']          = 'Editer un Slide';
$lang['placeholder_create_item']         = 'Créer un Item';
$lang['placeholder_edit_item']           = 'Editer un Item';
$lang['placeholder_create_topsite']      = 'Ajouter un Topsite';
$lang['placeholder_edit_topsite']        = 'Editer un Topsite';
$lang['placeholder_create_top']          = 'Ajouter un TOP Item';
$lang['placeholder_edit_top']            = 'Editer un TOP Item';
$lang['placeholder_select_category']     = 'Sélectionner une Categorie';
$lang['placeholder_create_download']     = 'Créer un Téléchargement';
$lang['placeholder_edit_download']       = 'Editer un Téléchargement';
$lang['placeholder_upload_image']        = 'Upload une Image';
$lang['placeholder_create_timeline']     = 'Create Timeline Item';
$lang['placeholder_edit_timeline']       = 'Edit Timeline Item';
$lang['placeholder_icon_name']           = 'Nom d\'Icon';
$lang['placeholder_category']            = 'Categorie';
$lang['placeholder_name']                = 'Nom';
$lang['placeholder_item']                = 'Item';
$lang['placeholder_image_name']          = 'Image';
$lang['placeholder_reason']              = 'Raison';
$lang['placeholder_gmlevel']             = 'GM Level';
$lang['placeholder_url']                 = 'URL';
$lang['placeholder_child_menu']          = 'Menu enfant';
$lang['placeholder_url_type']            = 'URL Type';
$lang['placeholder_route']               = 'Route';
$lang['placeholder_hours']               = 'Heures';
$lang['placeholder_soap_hostname']       = 'Soap Hostname';
$lang['placeholder_soap_port']           = 'Soap Port';
$lang['placeholder_soap_user']           = 'Soap User';
$lang['placeholder_soap_password']       = 'Soap Password';
$lang['placeholder_db_character']        = 'Character';
$lang['placeholder_db_hostname']         = 'Database Hostname';
$lang['placeholder_db_name']             = 'Database Name';
$lang['placeholder_db_user']             = 'Database User';
$lang['placeholder_db_password']         = 'Database Password';
$lang['placeholder_account_points']      = 'Points du compte';
$lang['placeholder_account_ban']         = 'Bannir un compte';
$lang['placeholder_account_unban']       = 'Déban un compte';
$lang['placeholder_account_grant_rank']  = 'Accorder un Rang MJ';
$lang['placeholder_account_remove_rank'] = 'Supprimer le Rang MJ';
$lang['placeholder_command']             = 'Commandes';
$lang['placeholder_emulator']            = 'Emulateur';
$lang['placeholder_size']                = 'Taille';
$lang['placeholder_select_type']         = 'Sélectionner un Type';
$lang['placeholder_patch']               = 'Select Patch';
$lang['placeholder_date']                = 'Select Date';

/*Config Lang*/
$lang['conf_website_name']        = 'Nom du Site';
$lang['conf_realmlist']           = 'Realmlist';
$lang['conf_discord_invid']       = 'ID de l\'Invitation Discord';
$lang['conf_timezone']            = 'Timezone';
$lang['conf_theme_name']          = 'Nom du Theme';
$lang['conf_maintenance_mode']    = 'Mode de Maintenance';
$lang['conf_social_facebook']     = 'Facebook URL';
$lang['conf_social_twitter']      = 'Twitter URL';
$lang['conf_social_youtube']      = 'Youtube URL';
$lang['conf_paypal_currency']     = 'Monnaie de PayPal';
$lang['conf_paypal_mode']         = 'Mode de PayPal';
$lang['conf_paypal_client']       = 'ID Client PayPal';
$lang['conf_paypal_secretpass']   = 'Mot de Passe Secret PayPal';
$lang['conf_default_description'] = 'Description par Défaut';
$lang['conf_admin_gmlvl']         = 'GM Level de L\'Administrateur';
$lang['conf_mod_gmlvl']           = 'GMLevel du Moderateur';
$lang['conf_recaptcha_key']       = 'reCaptcha Site Key';
$lang['conf_recaptcha_secret']    = 'reCaptcha Secret';
$lang['conf_account_activation']  = 'Activation de compte';
$lang['conf_smtp_hostname']       = 'SMTP Hostname';
$lang['conf_smtp_port']           = 'SMTP Port';
$lang['conf_smtp_encryption']     = 'SMTP Encryption';
$lang['conf_smtp_username']       = 'SMTP Username';
$lang['conf_smtp_password']       = 'SMTP Password';
$lang['conf_sender_email']        = 'Email de l\'expéditeur';
$lang['conf_sender_name']         = 'Nom de l\'expéditeur';

/*Logs */
$lang['placeholder_logs_dp']          = 'Dons';
$lang['placeholder_logs_quantity']    = 'Quantité';
$lang['placeholder_logs_hash']        = 'Hash';
$lang['placeholder_logs_voteid']      = 'ID de Vote';
$lang['placeholder_logs_points']      = 'Points';
$lang['placeholder_logs_lasttime']    = 'Dernière fois';
$lang['placeholder_logs_expiredtime'] = 'Temps expiré';

/*Status Lang*/
$lang['status_completed'] = 'Completé';
$lang['status_cancelled'] = 'Annulé';

/*Options Lang*/
$lang['option_normal']         = 'Normal';
$lang['option_dropdown']       = 'Dropdown';
$lang['option_image']          = 'Image';
$lang['option_video']          = 'Video';
$lang['option_iframe']         = 'Iframe';
$lang['option_enabled']        = 'Activé';
$lang['option_disabled']       = 'Désactivé';
$lang['option_ssl']            = 'SSL';
$lang['option_tls']            = 'TLS';
$lang['option_none']           = 'None';
$lang['option_everyone']       = 'Tout le monde';
$lang['option_staff']          = 'STAFF';
$lang['option_all']            = 'STAFF - Tout le monde';
$lang['option_rename']         = 'Renommer';
$lang['option_customize']      = 'Personnaliser';
$lang['option_change_faction'] = 'Changer de Faction';
$lang['option_change_race']    = 'Changer de Race';
$lang['option_dp']             = 'DP';
$lang['option_vp']             = 'VP';
$lang['option_dp_vp']          = 'DP & VP';
$lang['option_internal_url']   = 'Internal URL';
$lang['option_external_url']   = 'External URL';
$lang['option_on']             = 'On';
$lang['option_off']            = 'Off';

/*Count Lang*/
$lang['count_accounts_created']    = 'Compte crée';
$lang['count_accounts_banned']     = 'Compte banni';
$lang['count_news_created']        = 'Actualité Crée';
$lang['count_changelogs_created']  = 'Changelogs Crée';
$lang['total_accounts_registered'] = 'Total des comptes enregistrés.';
$lang['total_accounts_banned']     = 'Total des comptes bannis.';
$lang['total_news_writed']         = 'Total d\'actualités écrites.';
$lang['total_changelogs_writed']   = 'Total de changelogs écrites.';

$lang['info_alliance_players'] = 'Joueurs Alliance';
$lang['info_alliance_playing'] = 'Joueurs Alliances sur le Royaume';
$lang['info_horde_players']    = 'Joueurs Horde';
$lang['info_horde_playing']    = 'Joueurs Hordes sur le Royaume';
$lang['info_players_playing']  = 'Joueurs sur le Royaume';

/*Alert Lang*/
$lang['alert_smtp_activation'] = 'Si vous activez cette option, vous devez configurer SMTP pour envoyer des e-mails.';
$lang['alert_banned_reason']   = 'Est banni, raison:';

/*Logs Lang*/
$lang['log_new_level']      = 'Recevez un nouveau niveau';
$lang['log_old_level']      = 'Avant c\'était';
$lang['log_new_name']       = 'Ca a un nouveau nom';
$lang['log_old_name']       = 'Avant c\'était';
$lang['log_unbanned']       = 'Débanni';
$lang['log_customization']  = 'Obtenez une personnalisation';
$lang['log_change_race']    = 'Obtenez un changement de race';
$lang['log_change_faction'] = 'Obtenez un changement de faction';
$lang['log_banned']         = 'A été banni';
$lang['log_gm_assigned']    = 'Obtenu un rang de MJ';
$lang['log_gm_removed']     = 'Le rang de MJ a été supprimé';

/*CMS Lang*/
$lang['cms_version_currently']  = 'Cette version est actuellement en cours d\'exécution';
$lang['cms_warning_update']     = 'Lorsque le cms est mis à jour, la configuration peut être restaurée par défaut en fonction des modifications apportées à chaque version.';
$lang['cms_php_version']        = 'PHP Version';
$lang['cms_allow_fopen']        = 'allow_url_fopen';
$lang['cms_allow_include']      = 'allow_url_include';
$lang['cms_loaded_modules']     = 'Loaded Modules';
$lang['cms_possible_webserver'] = 'Web Server <small>(possibly)<small>';
$lang['cms_loaded_extensions']  = 'Loaded Extensions';
