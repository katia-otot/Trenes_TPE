<?php
require_once "./views/homeView.php";

class HomeController{
    private $view;

    function __construct(){
        $this -> view = new homeView();
    }

    public function home (){
        $this -> view -> showHome();
    }
}