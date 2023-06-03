<?php
require_once "./models/locomotorasModel.php";
require_once "./controllers/loginController.php";
require_once "./views/locomotorasView.php";

class locomotorasController{ 
    private $model;
    private $view;
    private $loginController;

    function __construct(){
        $this -> model = new locomotorasModel();
        $this -> view = new locomotorasView();
        $this -> loginController = new loginController();

    }

    public function showLocomotoras(){
        $logueado = $this -> loginController -> isLoggedIn();

        $locomotoras = $this -> model -> getLocomotoras();
        $this -> view -> showLocomotoras($locomotoras, $logueado);
    }

}