<?php

// проверяем  наличие файлов с классами, подключаем если есть
 function autoloadsystem($class) {
    $filename = ROOT . "/app/core/" . strtolower($class) . ".php";
    if(file_exists($filename)){
       require $filename;
    }
    $filename = ROOT . "/app/helpers/" . strtolower($class) . ".php";
    if(file_exists($filename)){
       require $filename;
    }
    $filename = ROOT . "/app/models/" . strtolower($class) . ".php";
    if(file_exists($filename)){
       require $filename;
    }
 }
 // запутстим регистрацию данных классов
 spl_autoload_register("autoloadsystem");
// стартуем маршрутизатор, шаблон по умолчанию, страница стартовая
$app = new Router();
$app->setTemplate('default');
$app->setController('index');
$app->init();
