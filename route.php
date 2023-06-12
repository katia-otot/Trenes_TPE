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
        if (isset($params[1])) {
            $controllerHome->error();
        } else {
            $controllerHome->home();
        }
        break;

    case 'Acceder':
        if (isset($params[1])) {
            $controllerHome->error();
        } else {
            $controllerLogin->showLogin();
        }
        break;

    case 'Accediendo':
        $controllerLogin->chequearLogin();
        break;

    case 'Cerrar':

        $controllerLogin->logout();
        break;

    case 'Locomotoras':
        if (isset($params[1])) {
            $controllerHome->error();
        } else {
            $controllerLocomotora->showLocomotoras();
        }
        break;

    case 'Vagones':
        if (isset($params[1])) {

            $locomotora_id = $params[1];
        } else {
            $locomotora_id = null;
        }
        $controllerVagon->showVagones($locomotora_id);
        break;

    case 'Vagon':
        if (isset($params[1])) {

            $id_vagon = $params[1];
        } else {
            $id_vagon = null;
            // $controllerHome->error();
        }
        $controllerVagon->showVagon($id_vagon);
        break;

    case 'borrarVagon':
        if (isset($params[1])) {
            $id_vagon = $params[1];
            $controllerVagon->deleteVagon($id_vagon);
        } else {
            $id_vagon = null;
            $controllerHome->error();
        }
        break;
    case 'borrarLocomotora':
        // echo ($params[1]);
        if (isset($params[1])) {
            $id_locomotora = $params[1];

            $controllerLocomotora->deleteLocomotora($id_locomotora);
        } else {
            $id_locomotora = null;
            $controllerHome->error();
        }
        break;

    case 'confirmarBorrarLocomotora':
        // echo ($params[1]);
        if (isset($params[1])) {
            $id_locomotora = $params[1];
            $controllerLocomotora->confirmarDeleteLocomotora($id_locomotora);
        } else {
            $id_locomotora = null;
            $controllerHome->error();
        }
        break;
    case 'confirmarBorrarVagon':
        //ARREGLAR ISSET PARAMS
        if (isset($params[1])) {
            $id_vagon = $params[1];

            $controllerVagon->confirmarDeleteVagon($id_vagon);
        } else {
            $id_vagon = null;
            $controllerHome->error();
        }
        break;

    case 'formularioLocomotora':
        if (isset($params[1])) {
            $id_locomotora = $params[1];
        } else {
            $id_locomotora = null;
            $controllerHome->error();
        }
        $controllerLocomotora->showFormulario($id_locomotora);
        break;

    case 'formularioVagon':
        if (isset($params[1])) {
            $id_vagon = $params[1];
        } else {
            $id_vagon = null;
            $controllerHome->error();
        }
        $controllerVagon->showFormulario($id_vagon);
        break;

    case 'insertarOmodificarLocomotora':
        $id_locomotora = $_POST['id_locomotora'];
        $modelo = $_POST["modelo"];
        $anio_fabricacion = $_POST["anio_fabricacion"];
        $lugar_fabricacion = $_POST["lugar_fabricacion"];
        $controllerLocomotora->insertOrUpdateLocomotora($id_locomotora, $modelo, $anio_fabricacion, $lugar_fabricacion);
        break;

    case 'insertarOmodificarVagon':
        $id_vagon = $_POST['id_vagon'];
        $nro_vagon = $_POST["nro_vagon"];
        $tipo = $_POST["tipo"];
        $capacidad_max = $_POST["capacidad_max"];
        $modelo = $_POST["modelo"];
        $descripcion = $_POST["descripcion"];
        $locomotora_id = $_POST["locomotora_id"];
        $controllerVagon->insertOrUpdateVagon($id_vagon, $nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id);
        break;

    default:
        $controllerHome->error();
        // echo "404 no existe la página";
        break;
}
