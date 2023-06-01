<?php
require_once "./models/vagonesModel.php";
require_once "./views/vagonesView.php";

class vagonesController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new vagonesModel();
        $this->view = new vagonesView();
    }

    public function showVagones($locomotora_id)
    {
        if ($locomotora_id == NULL)
            $vagones = $this->model->getVagones();
        else
            $vagones = $this->model->getVagonesDeLocomotora($locomotora_id);
        $this->view->showVagones($vagones);
       
    }
    public function showVagon($id_vagon)
    {
      $vagon = $this->model->getVagon($id_vagon);
        // $idvagon = $vagon->id_vagon;
        $this->view->showVagon($vagon);
    }
}
