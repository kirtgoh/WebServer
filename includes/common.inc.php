<?php
  if (!defined('IN_TG')) {
    exit('Access Denied!');
  }



define(ROOT_PATH,substr(dirname(__FILE__),0,-8));
if (PHP_VERSION < '4.1.0') {
  exit('Version is too LOW!');
}

require ROOT_PATH.'includes/global.func.php';

define('START_TIME', _runtime());

?> 
