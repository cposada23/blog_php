<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';
include_once    '../config.php';

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);
// var_dump($baseUrl);

function render($filename, $params = []) {
    ob_start();
    extract($params);
    include $filename;
    return ob_get_clean();
}

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();

$router->controller('/admin', App\Controllers\Admin\IndexController::class);
$router->controller('/admin/posts', App\controllers\Admin\PostController::class);
$router->controller('/', App\Controllers\IndexController::class);


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;