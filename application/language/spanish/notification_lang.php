/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*Notification Title Lang*/
$lang['notification_title_success'] = 'Éxito';
$lang['notification_title_warning'] = 'Advertencia';
$lang['notification_title_error']   = 'Error';
$lang['notification_title_info']    = 'Información';

/*Notification Message (Login/Register) Lang*/
$lang['notification_username_empty']                   = 'El nombre de usuario está vacío';
$lang['notification_account_not_created']              = 'The account could not be created. Check the data and try again.';
$lang['notification_email_empty']                      = 'El correo electrónico está vacío';
$lang['notification_password_empty']                   = 'La contraseña esta vacia';
$lang['notification_user_error']                       = 'El nombre de usuario o contraseña son incorrectos. Inténtalo de nuevo!';
$lang['notification_recaptcha_error']                  = 'Error al verificar reCAPTCHA, inténtalo de nuevo!';
$lang['notification_email_error']                      = 'El correo electrónico o la contraseña es incorrecta. Inténtalo de nuevo!';
$lang['notification_check_email']                      = 'El nombre de usuario o correo electrónico es incorrecto. Inténtalo de nuevo!';
$lang['notification_checking']                         = 'Comprobación...';
$lang['notification_redirection']                      = 'Conectándose a su cuenta...';
$lang['notification_new_account']                      = 'Nueva cuenta creada. redirigiendo al inicio de sesión...';
$lang['notification_email_sent']                       = 'Email enviado. Por favor revise su correo electrónico...';
$lang['notification_account_activation']               = 'Email enviado. Por favor revise su correo electrónico para activar su cuenta.';
$lang['notification_captcha_error']                    = 'Por favor revise el captcha';
$lang['notification_password_lenght_error']            = 'Longitud de contraseña incorrecta. Por favor, use una contraseña entre 5 y 16 caracteres';
$lang['notification_account_already_exist']            = 'Esta cuenta ya existe';
$lang['notification_password_not_match']               = 'Las contraseñas no coinciden';
$lang['notification_usernamepass_not_match']           = 'La contraseña no coincide con este usuario';
$lang['notification_same_password']                    = 'La contraseña es la misma.';
$lang['notification_currentpass_not_match']            = 'La contraseña actual no es correcta';
$lang['notification_used_email']                       = 'El Correo ya está en uso';
$lang['notification_email_not_match']                  = 'Los correos electrónicos no coinciden';
$lang['notification_username_not_match']               = 'El usuario no coincide';
$lang['notification_expansion_not_found']              = 'Expansión no encontrada';
$lang['notification_recovery_email_sent_success']      = 'Information about the password reset process has been sent to your e-mail.';
$lang['notification_recovery_email_sent_fail']         = 'Password reset failed, please try again.';
$lang['notification_recovery_token_valid_success']     = '<strong>Password changed successfully. </strong>Please check your email for new credentials to login.';
$lang['notification_recovery_token_valid_fail']        = 'Invalid email or token is invalid, used or expired.';
$lang['notification_recovery_token_expired_fail']      = 'Your token has expired, please make new request.';
$lang['notification_activation_email_sent_success']    = '<strong>Account created successfully.</strong> Please check your email to activate your account. You can login to your Site account to check your activation status.';
$lang['notification_activation_email_sent_fail']       = 'Account created successfully but there was an error sending Activation Email, please login to your account and request new one.';
$lang['notification_activation_email_resent_success']  = '<strong>New activation email sent successfully.</strong> Please check your email to activate your account.';
$lang['notification_activation_email_resent_fail']     = 'There was a problem sending Activation Email, please request new one below.';
$lang['notification_activation_token_valid_success']   = '<strong>Account Activated.</strong> Now you can sign in with your account.';
$lang['notification_activation_token_valid_fail']      = 'The activation key provided is not valid.';
$lang['notification_activation_not_found_fail']        = 'Something went wrong. Possibly invalid email or token is invalid, used or expired.';
$lang['notification_activation_token_expired_success'] = 'Your activation token <strong>has already been used once</strong>, you should be able to login.';
$lang['notification_activation_token_expired_fail']    = 'Your token has expired, please login to your account and make new request.';

/*Notification Message (General) Lang*/
$lang['notification_email_changed']                  = 'El correo electrónico ha sido cambiado.';
$lang['notification_username_changed']               = 'El usuario ha sido cambiado.';
$lang['notification_password_changed']               = 'La contraseña ha sido cambiada.';
$lang['notification_avatar_changed']                 = 'El avatar ha sido cambiado.';
$lang['notification_wrong_values']                   = 'Los valores son incorrectos';
$lang['notification_select_type']                    = 'Seleccione un tipo';
$lang['notification_select_priority']                = 'Seleccione una prioridad';
$lang['notification_select_category']                = 'Seleccione una categoría';
$lang['notification_select_realm']                   = 'Seleccione un reino';
$lang['notification_select_character']               = 'Selecciona un personaje';
$lang['notification_select_item']                    = 'Seleccione un item';
$lang['notification_report_created']                 = 'El informe ha sido creado.';
$lang['notification_title_empty']                    = 'El título está vacío';
$lang['notification_description_empty']              = 'La descripción está vacía';
$lang['notification_name_empty']                     = 'El nombre está vacío';
$lang['notification_id_empty']                       = 'El id está vacío';
$lang['notification_reply_empty']                    = 'La respuesta está vacía';
$lang['notification_general_error']                  = 'Something went wrong.';
$lang['notification_reply_created']                  = 'La respuesta ha sido enviada.';
$lang['notification_reply_updated']                  = 'Reply has been updated.';
$lang['notification_reply_deleted']                  = 'Se ha eliminado la respuesta.';
$lang['notification_topic_created']                  = 'El topic ha sido creado.';
$lang['notification_donation_successful']            = 'La donación se ha completado con éxito, verifique los puntos donor en su cuenta.';
$lang['notification_donation_canceled']              = 'La donación ha sido cancelada.';
$lang['notification_donation_error']                 = 'La información proporcionada en la transacción no coincide.';
$lang['notification_store_chars_error']              = 'Seleccione su personaje en cada artículo.';
$lang['notification_store_item_insufficient_points'] = 'No tienes suficientes puntos para comprar.';
$lang['notification_store_item_purchased']           = 'Los artículos han sido comprados, por favor revisa tu correo en el juego.';
$lang['notification_store_item_added']               = 'El artículo seleccionado ha sido añadido a su carrito.';
$lang['notification_store_item_removed']             = 'El artículo seleccionado ha sido eliminado de su carrito.';
$lang['notification_store_cart_error']               = 'La actualización del carrito falló, por favor intente de nuevo.';

/*Notification Message (Admin) Lang*/
$lang['notification_changelog_created'] = 'El changelog ha sido creado.';
$lang['notification_changelog_edited']  = 'El changelog ha sido editado.';
$lang['notification_changelog_deleted'] = 'El changelog ha sido eliminado.';
$lang['notification_forum_created']     = 'El foro ha sido creado.';
$lang['notification_forum_edited']      = 'El foro ha sido editado.';
$lang['notification_forum_deleted']     = 'El foro ha sido eliminado.';
$lang['notification_category_created']  = 'La categoría ha sido creada.';
$lang['notification_category_edited']   = 'La categoría ha sido editada.';
$lang['notification_category_deleted']  = 'La categoría ha sido eliminada.';
$lang['notification_menu_created']      = 'El menú ha sido creado.';
$lang['notification_menu_edited']       = 'El menú ha sido editado.';
$lang['notification_menu_deleted']      = 'El menú ha sido eliminado.';
$lang['notification_news_deleted']      = 'La noticia ha sido eliminada.';
$lang['notification_page_created']      = 'La página ha sido creada.';
$lang['notification_page_edited']       = 'La página ha sido editada.';
$lang['notification_page_deleted']      = 'La página ha sido eliminada.';
$lang['notification_realm_created']     = 'El reino ha sido creado.';
$lang['notification_realm_edited']      = 'El reino ha sido editado.';
$lang['notification_realm_deleted']     = 'El reino ha sido eliminado.';
$lang['notification_slide_created']     = 'El slide ha sido creado.';
$lang['notification_slide_edited']      = 'El slide ha sido editado.';
$lang['notification_slide_deleted']     = 'El slide ha sido eliminado.';
$lang['notification_item_created']      = 'El item ha sido creado.';
$lang['notification_item_edited']       = 'El item ha sido editado.';
$lang['notification_item_deleted']      = 'El item ha sido eliminado.';
$lang['notification_top_created']       = 'El top item ha sido creado.';
$lang['notification_top_edited']        = 'El top item ha sido editado.';
$lang['notification_top_deleted']       = 'El top item ha sido eliminado.';
$lang['notification_topsite_created']   = 'El topsite ha sido creado.';
$lang['notification_topsite_edited']    = 'El topsite ha sido editado.';
$lang['notification_topsite_deleted']   = 'El topsite ha sido eliminado.';
$lang['notification_timeline_created']  = 'The Timeline item has been created.';
$lang['notification_timeline_edited']   = 'The Timeline item has been edited.';
$lang['notification_timeline_deleted']  = 'The Timeline item has been deleted.';
$lang['notification_settings_updated'] = 'La configuración ha sido actualizada.';
$lang['notification_module_enabled']   = 'El módulo ha sido habilitado.';
$lang['notification_module_disabled']  = 'El módulo ha sido desactivado.';
$lang['notification_migration']        = 'Los ajustes se han establecido.';

$lang['notification_donation_added']   = 'Donación agregada';
$lang['notification_donation_deleted'] = 'Donación eliminada';
$lang['notification_donation_updated'] = 'Donación actualizada';
$lang['notification_points_empty']     = 'Puntos esta vacio';
$lang['notification_tax_empty']        = 'El impuesto esta vacio';
$lang['notification_price_empty']      = 'El precio esta vacio';
$lang['notification_incorrect_update'] = 'Actualización inesperada';

$lang['notification_route_inuse'] = 'La ruta ya está en uso por favor elija otra.';

$lang['notification_account_updated']    = 'La cuenta ha sido actualizada.';
$lang['notification_dp_vp_empty']        = 'DP/VP está vacío';
$lang['notification_account_banned']     = 'La cuenta ha sido prohibida.';
$lang['notification_reason_empty']       = 'La razon esta vacia';
$lang['notification_account_ban_remove'] = 'La prohibición en la cuenta ha sido eliminada.';
$lang['notification_rank_empty']         = 'El rango está vacío';
$lang['notification_rank_granted']       = 'El rango ha sido otorgado.';
$lang['notification_rank_removed']       = 'El rango ha sido removido.';

$lang['notification_cms_updated']         = 'El CMS ha sido actualizado';
$lang['notification_cms_update_error']    = 'El CMS no pudo ser actualizado';
$lang['notification_cms_not_updated']     = 'No se ha encontrado una nueva versión para actualizar';
$lang['notification_cms_update_disabled'] = 'This feature has been temporarily disabled.';

$lang['notification_select_category'] = 'No es una subcategoria';