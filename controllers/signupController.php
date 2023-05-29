<?php
require_once "./models/loginModel.php";
require_once "./views/signupView.php";

class signupController{
    private $model;
    private $view;

    function __construct(){
        $this -> model = new loginModel();
        $this -> view = new signupView();
    }

    public function showSignup(){
        $this -> model -> getUsuarios();
        $this -> view -> showSignup();
    }
}