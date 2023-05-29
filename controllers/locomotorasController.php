<?php
require_once "./models/locomotorasModel.php";
require_once "./views/locomotorasView.php";

class locomotorasController{ 
    private $model;
    private $view;

    function __construct(){
        $this -> model = new locomotorasModel();
        $this -> view = new locomotorasView();
    }

    public function showLocomotoras(){
        $locomotoras = $this -> model -> getLocomotoras();
        $this -> view -> showLocomotoras($locomotoras);
    }
}