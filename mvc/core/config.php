<?php
define('BASE_PATH', dirname(dirname(dirname(realpath(__FILE__)))));
define('BASE_URL', (isset($_SERVER['HTTPS']))?"https://":'http://'.str_replace($_SERVER['DOCUMENT_ROOT'], $_SERVER['SERVER_NAME'], BASE_PATH));

//define('THEME_PATH', (defined('APP_ROOT'))?'/'.APP_ROOT.'/themes/'.THEME:'/themes/'.THEME);
//define('ADMIN_THEME_PATH', (defined('APP_ROOT'))?'/'.APP_ROOT.'/themes/'.ADMIN_THEME:'/themes/'.ADMIN_THEME);



