<?php
require_once('libs/smarty/Smarty.class.php');

class homeView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function showHome($logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL); 
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display ('templates/home.tpl') 
    }
    
    public function error(){
        $this -> smarty -> assign('BASE_URL', BASE_URL); 
        $this -> smarty -> display ('templates/notfound.tpl');
    }
}


