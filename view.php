<?php
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');

$uri = $_SERVER['REQUEST_URI'];
$result = preg_match('/view/',$uri);
$id = $_GET['id'];


if (!empty($result) && !empty($id)) {
    $router = new Router();
    $router->run('actionView', $id);
} 
