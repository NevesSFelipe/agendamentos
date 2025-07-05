<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App/Configs/Constantes.php';

use App\Core\Router;

$url = $_GET['url'] ?? '';

$router = new Router($url);
$router->handle();