<?php
require_once "./models/loginModel.php";
require_once "./views/loginView.php";

class loginController{
    private $model;
    private $view;

    function __construct(){
        $this -> model = new loginModel();
        $this -> view = new loginView();
    }

    public function showLogin(){
        $this -> model -> getUsuarios();
        $this -> view -> showLogin();
    }
}