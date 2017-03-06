<?php
ob_start();

if (function_exists('date_default_timezone_set')){
    date_default_timezone_set('Europe/Kiev');
}

// optionall create a constant for the name of the site
define('SITETITLE','ShopProdavalos MVC Application');

// set prefix for sessions
define('SESSION_PREFIX','shop_');

// 1. включаем вывод ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);
// установим корневую папку
define('ROOT', dirname(__FILE__));
require_once 'app/bootstrap.php';
// отправка изменений
ob_flush();
