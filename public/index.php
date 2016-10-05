<?php

//--------------------------------------------
use cms\config\templates\Renderer;

chdir(dirname(__DIR__));
define('ROOT_PATH', dirname(__DIR__ . '../'));

setlocale(LC_TIME, 'de_DE.UTF-8');
date_default_timezone_set('Europe/Berlin');

session_start();
//--------------------------------------------

if (!isset($_SESSION['currentPage'])) {
    $_SESSION['currentPage'] = 'index';
}

require ROOT_PATH . '/vendor/autoload.php';

$renderer = new Renderer();
echo $renderer->renderLayout();
