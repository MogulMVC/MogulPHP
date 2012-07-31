<?php

/**
*
* Start the application compilation process
* Generate error messages if problems happen
* @Author Alan James - alanjames1987@gmail.com
*
*/

define('SERVER_ROOT', dirname(__FILE__));

define('FRAMEWORK', 'framework');
define('APPLICATION', 'application');

if(!is_dir(SERVER_ROOT."/".FRAMEWORK)){
  exit('Error - No framework installed.');
}

if(!is_dir(SERVER_ROOT."/".APPLICATION)){
  exit('Error - No application installed.');
}

require_once(SERVER_ROOT."/".FRAMEWORK.'/framework.php');

?>