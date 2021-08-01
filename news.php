<?php
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');

$uri = $_SERVER['REQUEST_URI'];
$result = preg_match('/page/',$uri);
$page = $_GET['page'];

$router = new Router();

$router->run('actionPage', $page);

if (!empty($result) && !empty($page)) {
    $router->run('actionPage', $page);
} else {
    $router->run('actionIndex', '');
}
