<?php
require_once "./views/homeView.php";

class HomeController{
    private $view;
    private $loginController;

    function __construct(){
        $this -> view = new homeView();
        $this -> loginController = new loginController();
    }

    public function home(){
        $logueado = $this -> loginController -> isLoggedIn();
     
        $this -> view -> showHome($logueado);

    }
}