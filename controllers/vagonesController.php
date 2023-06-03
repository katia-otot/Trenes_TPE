<?php
require_once "./models/vagonesModel.php";
require_once "./views/vagonesView.php";
require_once "./controllers/loginController.php";

class vagonesController{ 
    private $model;
    private $view;
    private $loginController;

    function __construct(){
        $this -> model = new vagonesModel();
        $this -> view = new vagonesView();
        $this -> loginController = new loginController();

    }

    public function showVagones($locomotora_id){
        if ($locomotora_id == NULL)
            $vagones = $this -> model -> getVagones();
        else 
            $vagones = $this -> model -> getVagonesDeLocomotora($locomotora_id); 
            $logueado = $this -> loginController -> isLoggedIn();
       
            $this -> view -> showVagones($vagones, $logueado);

    }

    public function showVagon($id_vagon){
        $vagon = $this -> model -> getVagon($id_vagon);
        // var_dump($vagon);
        $logueado = $this -> loginController -> isLoggedIn();

        $this -> view -> showVagon($vagon,$logueado);
        // $this -> view -> showVagon($vagon->id_vagon);
    }
}