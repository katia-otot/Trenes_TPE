<?php
require_once "./models/locomotorasModel.php";
require_once "./controllers/loginController.php";
require_once "./views/locomotorasView.php";

class locomotorasController{
    private $model;
    private $view;
    private $loginController;

    function __construct() {
        $this->model = new locomotorasModel();
        $this->view = new locomotorasView();
        $this->loginController = new loginController();
    }

    public function getLocomotoras(){
        return $this->model->getLocomotoras();
    }

    public function showLocomotoras() {
        $logueado = $this->loginController->isLoggedIn();

        $locomotoras = $this->model->getLocomotoras();
        $this->view->showLocomotoras($locomotoras, $logueado);
    }

    function deleteLocomotora($id_locomotora){
        $this->model->deleteLocomotora($id_locomotora);
        header("Location: " . BASE_URL . "Locomotoras");
    } 

    function insertOrUpdateLocomotora($id_locomotora, $modelo, $anio_fabricacion, $lugar_fabricacion){
        if($id_locomotora == 0){
            $this->model->insertLocomotora($modelo, $anio_fabricacion, $lugar_fabricacion);
        }else{
            $this -> model -> updateLocomotora($id_locomotora, $modelo, $anio_fabricacion, $lugar_fabricacion);
        }
        header("Location: " . BASE_URL . "Locomotoras");
    }

    public function showFormulario($id_locomotora){
        $logueado = $this->loginController->isLoggedIn();
        if ($id_locomotora == 0){
            $locomotora =(object) array("id_locomotora" => 0, "modelo" => "", "anio_fabricacion" => "", "lugar_fabricacion" => "");
    
        }else{
            $locomotora = $this -> model -> getLocomotora($id_locomotora);
        }
        $this -> view -> showFormulario($locomotora, $logueado);
    }
}
