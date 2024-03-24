<?php

require_once 'router.php';

header("Content-Type: application/json");

$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];


$route = new Router();

$route->route($request_method, $request_uri);
