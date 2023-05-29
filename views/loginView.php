<?php
require_once('libs/smarty/Smarty.class.php');

class loginView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function showLogin(){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> display ('templates/login.tpl');
    }
}