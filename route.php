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
    case 'login':
        $controllerLogin->chequearLogin();
        break;
    case 'Locomotoras':
        $controllerLocomotora->showLocomotoras();
        break;
    case 'Vagones':
        if (isset($params[1])) {

            $locomotora_id = $params[1];
            echo "vagones id";
            if (isset($params[2])) {
                $id_vagon= $params[2];
                $controllerVagon->showVagon($id_vagon);

                // echo"vagones todos";
            }
        } else {
            $locomotora_id = null;
            echo"vagones todos";
            if (isset($params[1])) {
                $id_vagon= $params[1];
                // echo"vagones todos";
                $controllerVagon->showVagon($id_vagon);
            }
        }
        $controllerVagon->showVagones($locomotora_id);

        break;
    // case 'Vagon':
    //     if (isset($params[1])) {
    //         $id_vagon = $params[1];
    //         // echo"vagones todos";
    //     } else {
    //         $locomotora_id = null;
    //         // echo "vagones id";
    //     }
    //     $controllerVagon->showVagones($locomotora_id);

    //     break;
    default:
        # code...
        break;
}
