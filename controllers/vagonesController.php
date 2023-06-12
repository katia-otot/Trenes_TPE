<?php
require_once "./models/vagonesModel.php";
require_once "./views/vagonesView.php";
require_once "./controllers/loginController.php";
require_once "./controllers/locomotorasController.php";
require_once "./views/homeView.php";
require_once "./models/locomotorasModel.php";


class vagonesController
{
    private $model;
    private $view;
    private $loginController;
    private $locomotorasController;
    private $homeView;
    private $locomotorasModel;

    function __construct()
    {
        $this->model = new vagonesModel();
        $this->view = new vagonesView();
        $this->loginController = new loginController();
        $this->locomotorasController = new locomotorasController();
        $this->homeView = new homeView();
        $this->locomotorasModel = new locomotorasModel();
    }

    public function showVagones($locomotora_id)
    {

        $logueado = $this->loginController->isLoggedIn();
        if ($locomotora_id == NULL) {
            $vagones = $this->model->getVagones();
            $this->view->showVagones($vagones, $logueado);
        } else {
            $locomotora = $this->locomotorasModel->getLocomotora($locomotora_id);
            // var_dump($locomotora);
            // if(($locomotora->id_locomotora)){
                if (!$locomotora) {
                    $this->homeView->error();
                }
                else {
                $vagones = $this->model->getVagonesDeLocomotora($locomotora_id);
                
                // var_dump($vagones);
                if (empty($vagones)){
                    $this->view->error();

                }
                else {
                    $this->view->showVagones($vagones, $logueado);
                }
            } 
        }
    }

    public function showVagon($id_vagon)
    {
        $vagon = $this->model->getVagon($id_vagon);
        // var_dump($vagon);
        // $id_vagon = $vagon->id_vagon;
        //    echo $id_vagon;
        $logueado = $this->loginController->isLoggedIn();
        if (!isset($vagon->id_vagon) || empty($vagon->id_vagon)) {

            $this->homeView->error();
        } else {
            $this->view->showVagon($vagon, $logueado);
        }
        $this->loginController->timeLogin();
        // $this->loginController->redirect();

    }

    public function confirmarDeleteVagon($id_vagon)
    {
        $this->loginController->redirect();
        $this->loginController->timeLogin();
        $this->view->confirmacionVagon($id_vagon);
    }
    public function deleteVagon($id_vagon)
    {
        $this->model->deleteVagon($id_vagon);
        $this->loginController->redirect();
        $this->loginController->timeLogin();
        $this->view->eliminado();
    }
    public function insertOrUpdateVagon($id_vagon, $nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id)
    {
        $this->loginController->timeLogin();
        $this->loginController->redirect();
        if ($id_vagon == 0) {
            $this->model->insertVagon($nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id);
        } else {
            $this->model->updateVagon($id_vagon, $nro_vagon, $tipo, $capacidad_max, $modelo, $descripcion, $locomotora_id);
        }

        $this->view->agregado();
    }

    public function showFormulario($id_vagon)
    {
        $logueado = $this->loginController->isLoggedIn();
        $this->loginController->redirect();
        $this->loginController->timeLogin();

        $locomotoras = $this->locomotorasController->getLocomotoras();

        if ($id_vagon == 0) {
            $vagon = (object) array("id_vagon" => 0, "nro_vagon" => "", "tipo" => "", "capacidad_max" => "", "modelo" => "", "descripcion" => "", "locomotora_id" => "");
        } else {
            $vagon = $this->model->getVagon($id_vagon);
        }
        $this->view->showFormulario($vagon, $logueado, $locomotoras);
    }
}
