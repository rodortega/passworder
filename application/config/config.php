<?php
#
# set error handling
#
define('ENVIRONMENT', 'development');
#
# errors are visible
#
if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev')
{
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}
#
# errors are not visible
#
elseif (ENVIRONMENT == 'production' || ENVIRONMENT == 'prod')
{
    ini_set("display_errors", 0);
}
#
# do not change anything here
#
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
#
# version handling for scripts to reload and not cache
#
define('VERSION', '0.1');
#
# application's title. this should be in every HTML title
#
define('TITLE', 'PUP SIS • ');
#
# this will be used as timezone in every PHP datetime NOW
#
date_default_timezone_set("Asia/Manila");
#
# database configuration
#
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'passworder');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
define('DB_PORT', '3306');
#
# json function
#
# header('Content-Type: application/json');
# require APP . 'Libs/Json.php';
#
# cryptography credentials: do not share this to public
#
define('IV','jr2zOaS2^H6FqpuU');
define('AES_256_CBC', 'aes-256-cbc');
require APP . 'Libs/Crypto.php';
#
?>