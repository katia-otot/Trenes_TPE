<?php
require_once "controllers/homeController.php";
require_once "controllers/loginController.php";
require_once "controllers/locomotorasController.php";
require_once "controllers/vagonesController.php";
require_once "controllers/signupController.php";
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$controllerHome = new homeController;
$controllerLogin = new loginController;
$controllerLocomotora = new locomotorasController;
$controllerVagon = new vagonesController;
// $controllerSignup = new signupController;

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'index':
        $controllerHome->home();
        break;
    case 'Acceder':
        $controllerLogin->showLogin();
        break;
    case 'login':
        $controllerLogin->chequearLogin();
        break;
    case 'Locomotoras':
        $controllerLocomotora->showLocomotoras();
        break;
    case 'Vagones':
        if (isset($params[1]))
            $tren_id = $params[1];
        else
            $tren_id = null;
        $controllerVagon->showVagones($tren_id);
        break;
    default:
        # code...
        break;
}
