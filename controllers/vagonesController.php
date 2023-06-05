<?php
require_once "./models/vagonesModel.php";
require_once "./views/vagonesView.php";
require_once "./controllers/loginController.php";

class vagonesController{
    private $model;
    private $view;
    private $loginController;
    private $locomotorasController;

    function __construct(){
        $this->model = new vagonesModel();
        $this->view = new vagonesView();
        $this->loginController = new loginController();
        $this->locomotorasController = new locomotorasController();
    }

    public function showVagones($locomotora_id) {
        if ($locomotora_id == NULL)
            $vagones = $this->model->getVagones();
        else
            $vagones = $this->model->getVagonesDeLocomotora($locomotora_id);
        $logueado = $this->loginController->isLoggedIn();
        
        $this->view->showVagones($vagones, $logueado);
    }
   
    public function showVagon($id_vagon) {
        $vagon = $this->model->getVagon($id_vagon);
        $logueado = $this->loginController->isLoggedIn();

        $this->view->showVagon($vagon, $logueado);
    }

    public function confirmarDeleteVagon($id_vagon){
        $this->view->confirmacionVagon($id_vagon);
    }
    public function deleteVagon($id_vagon) {
        $this->model->deleteVagon($id_vagon);

        $this->view->eliminado();
    }
    public function insertOrUpdateVagon($id_vagon, $nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id){
        if($id_vagon == 0){
            $this->model->insertVagon($nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id);
        }else{
            $this -> model -> updateVagon($id_vagon, $nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id);
        }

        $this->view->agregado();
    }
 
    public function showFormulario($id_vagon){
        $logueado = $this->loginController->isLoggedIn();
        $locomotoras = $this->locomotorasController->getLocomotoras();

        if ($id_vagon == 0){
            $vagon =(object) array("id_vagon" => 0, "nro_vagon" => "", "tipo" => "", "capacidad_max" => "", "modelo" => "", "descripcion" => "", "locomotora_id"=>"");
    
        }else{
            $vagon = $this -> model -> getVagon($id_vagon);
        }
        $this -> view -> showFormulario($vagon, $logueado, $locomotoras);
    }
}
