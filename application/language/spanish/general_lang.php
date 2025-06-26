/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*Browser Tab*/
$lang['tab_news']           = 'Noticias';
$lang['tab_forum']          = 'Foro';
$lang['tab_store']          = 'Tienda';
$lang['tab_bugtracker']     = 'Bugtracker';
$lang['tab_changelogs']     = 'Changelogs';
$lang['tab_pvp_statistics'] = 'Estadísticas PvP';
$lang['tab_login']          = 'Iniciar sesión';
$lang['tab_register']       = 'Registrar';
$lang['tab_home']           = 'Inicio';
$lang['tab_donate']         = 'Donar';
$lang['tab_vote']           = 'Votar';
$lang['tab_cart']           = 'Carrito';
$lang['tab_account']        = 'Mi Cuenta';
$lang['tab_reset']          = 'Recuperación de contraseña';
$lang['tab_pending']        = 'Account Activation';
$lang['tab_error']          = 'Error 404';
$lang['tab_maintenance']    = 'Mantenimiento';
$lang['tab_online']         = 'Jugadores en linea';
$lang['tab_download']       = 'Descargas';

/*Panel Navbar*/
$lang['navbar_vote_panel']   = 'Panel de Votos';
$lang['navbar_donate_panel'] = 'Panel de Donaciones';

/*Button Lang*/
$lang['button_register']          = 'Registrar';
$lang['button_login']             = 'Iniciar sesión';
$lang['button_logout']            = 'Cerrar sesión';
$lang['button_activate']          = 'Activate';
$lang['button_request']           = 'Request New Code';
$lang['button_forgot_password']   = '¿Olvidaste tu contraseña?';
$lang['button_user_panel']        = 'Panel de Usuario';
$lang['button_admin_panel']       = 'Panel de Administración';
$lang['button_mod_panel']         = 'Panel de Moderación';
$lang['button_change_avatar']     = 'Cambiar Avatar';
$lang['button_add_personal_info'] = 'Añadir información personal';
$lang['button_create_report']     = 'Crear informe';
$lang['button_new_topic']         = 'Nuevo tema';
$lang['button_edit_topic']        = 'Editar tema';
$lang['button_save_changes']      = 'Guardar Cambios';
$lang['button_cancel']            = 'Cancelar';
$lang['button_send']              = 'Enviar';
$lang['button_read_more']         = 'Leer más';
$lang['button_add_reply']         = 'Crear respuesta';
$lang['button_remove']            = 'Borrar';
$lang['button_create']            = 'Crear';
$lang['button_save']              = 'Guardar';
$lang['button_close']             = 'Cerrar';
$lang['button_reply']             = 'Responder';
$lang['button_donate']            = 'Donar';
$lang['button_account_settings']  = 'Configuraciones de la cuenta';
$lang['button_cart']              = 'añadir al carrito';
$lang['button_view_cart']         = 'Ver carrito';
$lang['button_checkout']          = 'Checkout';
$lang['button_buying']            = 'Seguir comprando';

/*Alert Lang*/
$lang['alert_successful_purchase'] = 'Artículo comprado con éxito.';
$lang['alert_upload_error']        = 'Tu imagen debe estar en formato .jpg';
$lang['alert_changelog_not_found'] = 'El servidor no tiene registros de cambios para informar en este momento';
$lang['alert_points_insufficient'] = 'Puntos insuficientes';

/*Status Lang*/
$lang['offline'] = 'Offline';
$lang['online']  = 'Online';

/*Label Lang*/
$lang['label_open']   = 'Abierto';
$lang['label_closed'] = 'Cerrado';

/*Form Label Lang*/
$lang['label_login_info'] = 'Información de registro';

/*Input Placeholder Lang*/
$lang['placeholder_username']          = 'Nombre de usuario';
$lang['placeholder_email']             = 'Correo electrónico';
$lang['placeholder_password']          = 'Contraseña';
$lang['placeholder_re_password']       = 'Repetir contraseña';
$lang['placeholder_current_password']  = 'Contraseña actual';
$lang['placeholder_new_password']      = 'Nueva Contraseña';
$lang['placeholder_new_username']      = 'Nuevo usuario';
$lang['placeholder_confirm_username']  = 'Confirmar Nuevo Usuario';
$lang['placeholder_new_email']         = 'Nuevo correo';
$lang['placeholder_confirm_email']     = 'Confirmar nuevo correo';
$lang['placeholder_create_bug_report'] = 'Crear informe de error';
$lang['placeholder_title']             = 'Título';
$lang['placeholder_type']              = 'Tipo';
$lang['placeholder_description']       = 'Descripción';
$lang['placeholder_url']               = 'URL';
$lang['placeholder_uri']               = 'URL amigable (Ejemplo: tos)';
$lang['placeholder_highl']             = 'Destacado';
$lang['placeholder_lock']              = 'Bloquear';
$lang['placeholder_subject']           = 'Asunto';

/*Table header Lang*/
$lang['table_header_cname']            = 'Character Name';
$lang['table_header_gname']            = 'Guild Name';
$lang['table_header_name']             = 'Nombre';
$lang['table_header_faction']          = 'Facción';
$lang['table_header_total_kills']      = 'Muertes Totales';
$lang['table_header_total_honor']      = 'Total Honor';
$lang['table_header_current_rank']     = 'Current Rank';
$lang['table_header_kills']            = 'Kills';
$lang['table_header_today_kills']      = 'Muertes hoy';
$lang['table_header_yersterday_kills'] = 'Muertes ayer';
$lang['table_header_team_name']        = 'Nombre del equipo';
$lang['table_header_members']          = 'Miembros';
$lang['table_header_rating']           = 'Índice';
$lang['table_header_games']            = 'Juegos';
$lang['table_header_id']               = 'ID';
$lang['table_header_status']           = 'Estado';
$lang['table_header_priority']         = 'Prioridad';
$lang['table_header_date']             = 'Fecha';
$lang['table_header_author']           = 'Autor';
$lang['table_header_time']             = 'Tiempo';
$lang['table_header_icon']             = 'Icono';
$lang['table_header_realm']            = 'Reino';
$lang['table_header_zone']             = 'Zona';
$lang['table_header_character']        = 'Personaje';
$lang['table_header_price']            = 'Precio';
$lang['table_header_item_name']        = 'Nombre del Artículo';
$lang['table_header_items']            = 'Artículo(s)';
$lang['table_header_quantity']         = 'Cantidad';

/*Class Lang*/
$lang['class_warrior']     = 'Guerrero';
$lang['class_paladin']     = 'Paladín';
$lang['class_hunter']      = 'Cazador';
$lang['class_rogue']       = 'Pícaro';
$lang['class_priest']      = 'Sacerdote';
$lang['class_dk']          = 'Caballero de la muerte';
$lang['class_shaman']      = 'Chamán';
$lang['class_mage']        = 'Mago';
$lang['class_warlock']     = 'Brujo';
$lang['class_monk']        = 'Monje';
$lang['class_druid']       = 'Druida';
$lang['class_demonhunter'] = 'Cazador de Demonios';

/*Faction Lang*/
$lang['faction_alliance'] = 'Alianza';
$lang['faction_horde']    = 'Horda';

/*Gender Lang*/
$lang['gender_male']   = 'Masculino';
$lang['gender_female'] = 'Femenino';

/*Race Lang*/
$lang['race_human']               = 'Humano';
$lang['race_orc']                 = 'Orco';
$lang['race_dwarf']               = 'Enano';
$lang['race_night_elf']           = 'Elfo Nocturno';
$lang['race_undead']              = 'No-muerto';
$lang['race_tauren']              = 'Tauren';
$lang['race_gnome']               = 'Gnomo';
$lang['race_troll']               = 'Trol';
$lang['race_goblin']              = 'Goblin';
$lang['race_blood_elf']           = 'Elfo de Sangre';
$lang['race_draenei']             = 'Draenei';
$lang['race_worgen']              = 'Huargen';
$lang['race_panda_neutral']       = 'Pandaren Neutral';
$lang['race_panda_alli']          = 'Pandaren Alianza';
$lang['race_panda_horde']         = 'Pandaren Horda';
$lang['race_nightborde']          = 'Nocheterna';
$lang['race_void_elf']            = 'Elfo del Vacío';
$lang['race_lightforged_draenei'] = 'Draenei forjado por la Luz';
$lang['race_highmountain_tauren'] = 'Tauren monte alto';
$lang['race_dark_iron_dwarf']     = 'Enano Hierro Negro';
$lang['race_maghar_orc']          = 'Orco Maghar';

/*Header Lang*/
$lang['header_cookie_message'] = 'Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web. ';
$lang['header_cookie_button']  = '¡Lo tengo!';

/*Footer Lang*/
$lang['footer_rights'] = 'Todos los derechos reservados.';

/*Page 404 Lang*/
$lang['page_404_title']       = '404 Pagina no encontrada';
$lang['page_404_description'] = 'Parece que la página que estás buscando no se pudo encontrar';

/*Panel Lang*/
$lang['panel_acc_rank']           = 'Rango de cuenta';
$lang['panel_dp']                 = 'Puntos de Donación';
$lang['panel_vp']                 = 'Puntos de Votos';
$lang['panel_expansion']          = 'Expansión';
$lang['panel_member']             = 'Miembro desde';
$lang['panel_chars_list']         = 'Lista de Personajes';
$lang['panel_account_details']    = 'Detalles de la cuenta';
$lang['panel_last_ip']            = 'Última IP';
$lang['panel_request_ip']         = 'Requested IP';
$lang['panel_change_email']       = 'Cambiar Correo electrónico';
$lang['panel_change_username']    = 'Cambiar el nombre de usuario';
$lang['panel_change_password']    = 'Cambiar Contraseña';
$lang['panel_replace_pass_by']    = 'Reemplazar contraseña por';
$lang['panel_current_username']   = 'Current Username';
$lang['panel_current_email']      = 'Dirección de correo electrónico actual';
$lang['panel_replace_email_by']   = 'Reemplazar correo electrónico por';
$lang['panel_server_checkstatus'] = 'Server is offline. Purchases are not available.';

/*Home Lang*/
$lang['home_latest_news']   = 'Últimas Noticias';
$lang['home_discord']       = 'Discord';
$lang['home_server_status'] = 'Estado del Servidor';
$lang['home_set_realmlist'] = 'Download Realmlist';
$lang['home_realm_info']    = 'Actualmente el reino esta';

/*PvP Statistics Lang*/
$lang['statistics_top_20']  = 'TOP 20';
$lang['statistics_top_2v2'] = 'TOP 2V2';
$lang['statistics_top_3v3'] = 'TOP 3V3';
$lang['statistics_top_5v5'] = 'TOP 5V5';

/*News Lang*/
$lang['news_recent_list'] = 'Lista de noticias recientes';
$lang['news_comments']    = 'Comentarios';

/*Bugtracker Lang*/
$lang['bugtracker_report_notfound'] = 'Reportes no encontrados';

/*Donate Lang*/
$lang['donate_get'] = 'Obtenen';

/*Vote Lang*/
$lang['vote_next_time'] = 'Siguiente voto en:';

/*Forum Lang*/
$lang['forum_posts_count']        = 'publicaciones';
$lang['forum_topic_locked']       = 'Este tema está cerrado.';
$lang['forum_comment_locked']     = '¿Algo que explicar? Entra para participar.';
$lang['forum_comment_locked_act'] = 'Have something to say? Please activate your account first.';
$lang['forum_comment_header']     = 'Unirse a la conversación';
$lang['forum_not_authorized']     = 'No Autorizado';
$lang['forum_post_history']       = 'Ver historial de temas';
$lang['forum_topic_list']         = 'Lista Temas';
$lang['forum_last_activity']      = 'Última actividad';
$lang['forum_last_post_by']       = 'Último mensaje por';
$lang['forum_whos_online']        = 'Quién está en línea';
$lang['forum_replies_count']      = 'Replies';
$lang['forum_topics_count']       = 'Topics';
$lang['forum_users_count']        = 'Users';

/*Store Lang*/
$lang['store_categories']    = 'Categorías de la tienda';
$lang['store_top_items']     = 'TOP Items';
$lang['store_cart_added']    = 'Has añadido';
$lang['store_cart_in_your']  = 'en tu carrito de compras';
$lang['store_cart_no_items'] = 'No tienes artículos en tu carrito.';

/*Soap Lang*/
$lang['soap_send_subject'] = 'Compra en la Tienda';
$lang['soap_send_body']    = '¡Gracias por comprar en nuestra tienda!';

/*Email Lang*/
$lang['email_password_recovery_p1'] = 'Password Recovery Confirmation';
$lang['email_password_recovery_p2'] = 'Password Recovery';
$lang['email_account_activation']   = 'Activate Your %s Account';

/*Timeline Lang*/
$lang['timeline_subtitle'] = 'Content Release Timeline';
$lang['timeline_general']  = 'General';
$lang['timeline_pve']      = 'PvE';
$lang['timeline_pvp']      = 'PvP';