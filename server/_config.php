<?php
/**
 * Email Builder
 * Config
 *
 * Product Homepage: http://getemailbuilder.com
 * Author: DigitalWheat
 * Author URI: http://digitalwheat.com
 *
 */


$protocol = 'https';

$host= $protocol . '://' . $_SERVER['SERVER_NAME'];

$CONFIG['uploads_folder'] = 'server/uploads';

$CONFIG['host'] = $host;
$CONFIG['smtp']['host'] = 'smtp-relay.sendinblue.com';
$CONFIG['smtp']['username'] = 'about@mediaz.vn';
$CONFIG['smtp']['password'] = 'zSbZFnNfXB69QH7Y';
$CONFIG['smtp']['secure'] = 'tls';
$CONFIG['smtp']['port'] = 587;
$CONFIG['smtp']['auth'] = true;

$CONFIG['mail']['subject'] = '[MediaZ] Đầy là email test từ Email Builder';
$CONFIG['mail']['from_email'] = 'no-reply@mediaz.vn';
$CONFIG['mail']['from_name'] = 'MediaZ Support';
$CONFIG['mail']['alt_body'] = 'The plain text for non-HTML mail clients';