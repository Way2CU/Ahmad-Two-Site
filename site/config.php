<?php

/**
 * Site Configuration File
 *
 * This file overrides properties defined in main configuration
 * file for Caracal located in `units/config.php`.
 */

use Core\Cache\Type as CacheType;

// document standard
define('_STANDARD', 'html5');
define('_TIMEZONE', 'America/New_York');

define('DEBUG', 1);
// define('SQL_DEBUG', 1);

// site language configuration
$available_languages = array(/*'he',*/'ar');
$default_language = 'ar';

// default session options
$session_type = SessionType::BROWSER;

// database
$db_use = true;
$db_type = DatabaseType::MYSQL;
$db_config = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => 'caracal',
		'name' => 'web_engine'
	);

// configure code generation
$cache_method = CacheType::NONE;
$optimize_code = false;
$include_styles = true;
$url_rewrite = true;

?>
