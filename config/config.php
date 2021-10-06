<?php

//Note: This file should be included first in every php page.
error_reporting(E_ALL);
ini_set('display_errors', 'On');
define('BASE_PATH', dirname(dirname(__FILE__)));
define('APP_FOLDER', 'simpleadmin');
define('CURRENT_PAGE', basename($_SERVER['REQUEST_URI']));

require_once BASE_PATH . '/lib/MysqliDb/MysqliDb.php';
require_once BASE_PATH . '/helpers/helpers.php';

/*
|--------------------------------------------------------------------------
| DATABASE CONFIGURATION
|--------------------------------------------------------------------------
 */


/* IF YOU PREFER TO RUN THIS PROJECT LOCALLY, PLEASE UNCOMMENT ALL THESE CONFIGS BELOW */
// define('DB_HOST', "localhost");
// define('DB_USER', "root");
// define('DB_PASSWORD', "");
// define('DB_NAME', "dimasyudha");

define('DB_HOST', "remotemysql.com");
define('DB_USER', "TgI7Kv7MKt");
define('DB_PASSWORD', "MwFsM1PORa");
define('DB_NAME', "TgI7Kv7MKt");

/**
 * Get instance of DB object
 */
function getDbInstance() {
	return new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}