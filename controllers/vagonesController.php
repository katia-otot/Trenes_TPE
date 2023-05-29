<?php
require_once "./models/vagonesModel.php";
require_once "./views/vagonesView.php";

class vagonesController{ 
    private $model;
    private $view;

    function __construct(){
        $this -> model = new vagonesModel();
        $this -> view = new vagonesView();
    }

    public function showVagones($tren_id){
        if ($tren_id == NULL)
            $vagones = $this -> model -> getVagones();
        else 
            $vagones = $this -> model -> getVagon($tren_id);
            
        $this -> view -> showVagones($vagones);
    }
}