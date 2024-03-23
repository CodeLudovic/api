<?php

require_once 'router.php';

header("Content-Type: application/json");

$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];


$route = new Router();

// echo $request_method, $request_uri;
// die();

$route->route($request_method, $request_uri);


// require_once 'router.php';

// header("Content-Type: application/json");

// $request_method = $_SERVER['REQUEST_METHOD'];
// $request_uri = $_SERVER['REQUEST_URI'];


// // Cargar clases automáticamente
// spl_autoload_register(function ($className) {
//     include_once 'controllers/' . $className . '.php';
//     include_once 'models/' . $className . '.php';
// });


// // Ruta de la API
// $request = $_SERVER['REQUEST_URI'];

// // Dividir la URL y obtener los parámetros
// $urlParts = explode('/', $request);
// $controllerName = ucfirst($urlParts[2]) . 'Controller';
// $action = $urlParts[3];

// // Instanciar el controlador y llamar al método correspondiente
// $controller = new $controllerName();
// $controller->$action($_GET);

// index.php

// Cargar clases automáticamente
// spl_autoload_register(function ($className) {
//     include_once 'controllers/' . $className . '.php';
//     include_once 'models/' . $className . '.php';
// });

// // Ruta de la API
// $request = $_SERVER['REQUEST_URI'];

// // Dividir la URL y obtener los parámetros
// $urlParts = explode('/', $request);
// $controllerName = ucfirst($urlParts[2]) . 'Controller';
// $action = $urlParts[3];

// var_dump($urlParts, $controllerName, $action);
// die();

// Instanciar el controlador y llamar al método correspondiente
// $controller = new $controllerName();
// $controller->$action($_GET);