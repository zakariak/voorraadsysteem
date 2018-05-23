<?php

error_reporting(E_ALL);
// start van de session
session_start();
// constant for the static path
define('APP_PATH', __DIR__);
// include db conn and loadview function
require_once 'libs/functions.php';
// get sanitized GET vars ("controller" and "action")
$controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_URL);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
// default controller and action
if ($controller === null || $action === null) {
    $controller = 'pages';
    $action = 'home';
}

// load controller file (when file exists)
$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFile = 'controllers/' . $controllerClassName .'.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    throw new Exception('Controller file "'. $controllerFile .'" does not exist');
}
// create controller object (when class exists)
if (class_exists($controllerClassName)) {
    $controllerObject = new $controllerClassName();
} else {
    throw new Exception('Class "'. $controllerClassName .'" doesn\'t exist');
}
// call action method (when method exists)
if (method_exists($controllerObject, $action)) {
    $controllerObject->{$action}();
} else {
    throw new Exception('Action "'. $action .'" doesn\'t exist');
}
?>
