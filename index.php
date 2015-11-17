<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('APP',ROOT.'app'.DS.'reddes'.DS);
define('CORE',ROOT.'app'.DS.'core'.DS);
define('CONFIG', ROOT.'app'.DS.'config'.DS);



require_once(CORE.'autoload.php');


use app\core\Request as Request;

$app = new App();

$app->Template("default");