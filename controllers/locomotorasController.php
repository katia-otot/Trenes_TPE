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

        $locomotoras = $this->model->getLocomotoras();
        $this->view->showLocomotoras($locomotoras, $logueado);
    }
    function insertLocomotora()
    {
        if (isset($_POST['modelo']) and isset($_POST['anio_fabricacion']) and isset($_POST['lugar_fabricacion'])) {

            $modelo = $_POST["modelo"];
            $anio_fabricacion = $_POST["anio_fabricacion"];
            $lugar_fabricacion = $_POST["lugar_fabricacion"];
            $this->model->insertLocomotora($modelo, $anio_fabricacion, $lugar_fabricacion);
            // header("Location: " . BASE_URL);
        }
        // if(!empty($_POST['modelo'])and !empty($_POST['anio_fabricacion'])and !empty($_POST['lugar_fabricacion'])){

        // }
    }
    function deleteLocomotora($id_locomotora)
    {
        $this->model->deleteLocomotoraById($id_locomotora);
        // header("Location: " . BASE_URL);
    }
    // function updateLocomotoraById($id_locomotora)
    // {
    //     $locomotora = $this->model->getLocomotora($id_locomotora);
    //     // var_dump($locomotora);
    //     $logueado = $this->loginController->isLoggedIn();
    //     $_POST["modelo"] = $locomotora->modelo;
    //     $_POST["anio_fabricacion"] = $locomotora->anio_fabricacion;
    //     $_POST["lugar_fabricacion"] = $locomotora->lugar_fabricacion;
    //     $this->model->updateLocomotoraById($_POST["modelo"],  $_POST["anio_fabricacion"], $_POST["lugar_fabricacion"], $id_locomotora);

    //     //   if (isset($_POST['modelo']) and isset($_POST['anio_fabricacion'])and isset($_POST['lugar_fabricacion'])){
    //     //       $anio_fabricacion = $_POST["anio_fabricacion"];
    //     //       $lugar_fabricacion = $_POST["lugar_fabricacion"];
    //     //     //   header("Location: " . BASE_URL);
    //     //     }
    //     $this->view->showLocomotoras($id_locomotora, $logueado);
    // }



    //   function BorrarTarea($param){
    //     $this->model->BorrarTarea($param[0]);
    //   }

    //   function CompletarTarea($param){
    //   $this->model->CompletarTarea($param[0]);
    //   } 

}
