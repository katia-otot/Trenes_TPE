<?php
require_once "./models/locomotorasModel.php";
require_once "./controllers/loginController.php";
require_once "./views/locomotorasView.php";

class locomotorasController
{
    private $model;
    private $view;
    private $loginController;

    function __construct()
    {
        $this->model = new locomotorasModel();
        $this->view = new locomotorasView();
        $this->loginController = new loginController();
    }

    public function showLocomotoras()
    {
        $logueado = $this->loginController->isLoggedIn();
        $this->loginController->timeLogin();
        $locomotoras = $this->model->getLocomotoras();
        $this->view->showLocomotoras($locomotoras, $logueado);
    }

    public function confirmarDeleteLocomotora($id_locomotora)
    {
        $this->loginController->redirect();
        $this->loginController->timeLogin();
        $this->view->confirmacionLocomotora($id_locomotora);
    }

    function deleteLocomotora($id_locomotora)
    {
        $logueado = $this->loginController->isLoggedIn();
        $this->loginController->timeLogin();
        if ($logueado) {
            $this->model->deleteLocomotora($id_locomotora);
        } else {
            $this->loginController->redirect();
        }
        $this->view->eliminado();
    }

    function insertOrUpdateLocomotora($id_locomotora, $modelo, $anio_fabricacion, $lugar_fabricacion)
    {
        $this->loginController->redirect();
        $this->loginController->timeLogin();
        if ($id_locomotora == 0) {
            $this->model->insertLocomotora($modelo, $anio_fabricacion, $lugar_fabricacion);
        } else {
            $this->model->updateLocomotora($id_locomotora, $modelo, $anio_fabricacion, $lugar_fabricacion);
        }
        $this->view->agregado();
    }

    public function showFormulario($id_locomotora)
    {
        $logueado = $this->loginController->isLoggedIn();
        $this->loginController->redirect();
        $this->loginController->timeLogin();

        if ($id_locomotora == 0) {
            $locomotora = (object) array("id_locomotora" => 0, "modelo" => "", "anio_fabricacion" => "", "lugar_fabricacion" => "");
        } else {
            $locomotora = $this->model->getLocomotora($id_locomotora);
        }
        $this->view->showFormulario($locomotora, $logueado);
    }
}
