<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Config.php
 * -------------------------------------
 */


define('IS_PRODUCTION', FALSE);
if(IS_PRODUCTION){
    define('BASE_URL', 'http://localhost/mvc/');
}else{
    define('BASE_URL', 'http://www.sanjuandedios.devel/');    
}
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'default');

define('SESSION_TIME', 10);
define('HASH_KEY', '4f6a6d832be79');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', '4panel_gestor');
define('DB_CHAR', 'utf8');

define('EMPRESA', 'Web');
define('template', ROOT.'views/templates');
define('template_c', ROOT.'views/templates_c');
define('url_sufix', '.html');
define('PUBLIC_PATH', BASE_URL.'public/');
define('CSS_PATH', PUBLIC_PATH.'css/');
define('JS_PATH', PUBLIC_PATH.'js/');
define('FONTS_PATH', PUBLIC_PATH.'fonts/');
define('IMG_PATH', PUBLIC_PATH.'images/');
define('SEDE', 1);

?>