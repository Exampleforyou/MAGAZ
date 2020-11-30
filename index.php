<?php
// FRONT CONTROLLER


// 1.Общие настойки

ini_set('display_errors', 1);

error_reporting(E_ALL);

session_start();



// 2. Подключение файлов системы


define('ROOT', dirname(__FILE__)) ; // Константа полного пути к файлу, здесь это  F:\server\OSPanel\domains\mvc
define('ROOTSF', ROOT.'\Source Files');
define('HEADER',ROOTSF.'/templates/header.php');
define('FOOTER',ROOTSF.'/templates/footer.php');

//require_once(ROOTSF.'/components/Router.php');

require_once (ROOTSF.'/components/autoload.php');

// include_once(ROOTSF.'/components/Db.php');

// 4. Вызов Router

$router = new Router();
$router->run();




//     TEST
// $string = '21-03-2020';
// $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
// $replacement = 'Month: $1, Day: $2, Year: $3';
// echo preg_replace($pattern,$replacement, $string);
//exit();

//Month: 11, Day: 21, Year: 2020


