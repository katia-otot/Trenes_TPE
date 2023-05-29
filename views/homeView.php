<?php
require_once('libs/smarty/Smarty.class.php');

class homeView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function showHome(){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> display ('templates/home.tpl');
    }
}