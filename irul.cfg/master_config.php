<?php
/*
| -------------------------------------------------------------------
| MASTER CONFIGURATION
| -------------------------------------------------------------------
*/

# Just Info
define('APP_TITLE'     , 'LOCALHOST - OpenSIPKD');
define('APP_NAME'      , 'os'); //no space please
define('APP_CORP'      , 'OpenSIPKD');
define('APP_VERSION'   , '0.1');
define('APP_YEAR'      , '2016');

define('LICENSE_TO'    , 'KOTA DEPOK (DEMO)');
define('LICENSE_TO_SUB', 'DINAS PENDAPATAN PENGELOLA KEUANGAN DAN ASET');

# Propinsi -  Dati2
define('KD_PROPINSI','36'); // banten
define('KD_DATI2','76'); // banten - tangsel

# Environment (development testing production)
define('CI_ENV', 'development');
// define('CI_ENV', 'production');

# Database
define('DB_TYPE', 'postgre');
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_USER', 'irul');
define('DB_PASS', 'pwd123');
define('DB_NAME', 'bphtb_tangsel');

# App path
define('MY_APP', 'app');
define('MY_SYS', 'sys31');
define('MY_DEF_CONTROLLER', 'welcome');
define('MY_MODULES_LOCATIONS' , '../modules/');

# Base-url
define('MY_INDEX_PAGE', 'index.php');
if (isset($_SERVER['REMOTE_ADDR'])) {
    $PROTOCOL = "http" . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";
    $SERVER   = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
    $SERVER   = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $SERVER;
    $BASE_URL = $PROTOCOL . $SERVER . str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    define('MY_BASE_URL', $BASE_URL);
} else {
    define('MY_BASE_URL', '');
}
