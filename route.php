<?php
require_once "controllers/homeController.php";
require_once "controllers/loginController.php";
require_once "controllers/locomotorasController.php";
require_once "controllers/vagonesController.php";
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$controllerHome = new homeController;
$controllerLogin = new loginController;
$controllerLocomotora = new locomotorasController;
$controllerVagon = new vagonesController;
// $controllerVagonModelo = new vagonesController;

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Ferrocarriles';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'Ferrocarriles':
        $controllerHome->home();
        break;
    case 'Acceder':
        $controllerLogin->showLogin();
        break;
    case 'Accediendo':
        $controllerLogin->chequearLogin();
        break;
    case 'Cerrar':
        $controllerLogin->logout();
        break;
    case 'Locomotoras':
        $controllerLocomotora->showLocomotoras();
        // if (isset($params[1])) {
        // "Ingresando" == $params[1];
        // }
        break;
    case 'Vagones':
        if (isset($params[1])) {
            $locomotora_id = $params[1];
        } else {
            $locomotora_id = null;
        }
        $controllerVagon->showVagones($locomotora_id);
        // VER DONDE VA EL CONTROLLER PARA QUE ANDE
        // $controllerVagon->showModeloLocomotora(); 
        // 
        // $controllerVagon->showLocomotoraByVagon($locomotoras, $logueado);
        break;
    case 'Vagon':
        if (isset($params[1])) {
            $id_vagon = $params[1];
        } else {
            $id_vagon = null;
        }
        $controllerVagon->showVagon($id_vagon);
        break;
    case 'Agregar':

        $controllerLocomotora->insertLocomotora();
        break;
    case 'Borrar':

        // obtengo el parametro de la acción
        $id_locomotora = $params[1];
        $controllerLocomotora->deleteLocomotora($id_locomotora);
        break;
    case 'Modificar':
        // $id_locomotora = $params[1];
        // $controllerLocomotora->updateLocomotoraById($id_locomotora);
        
        break;
    default:
        # code...
        break;
}
