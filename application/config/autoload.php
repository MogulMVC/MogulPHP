<?php
if (!defined('SERVER_ROOT')) {header('/error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array();
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('core/MStyle.css', 'core/MIcons.css', 'core/style.css');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('3rdparty/jquery', '3rdparty/jquery', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array();
