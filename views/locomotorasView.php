<?php
require_once('libs/smarty/Smarty.class.php');
require_once('./models/locomotorasModel.php');

class locomotorasView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function showLocomotoras($locomotoras){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('locomotoras', $locomotoras);
        $this -> smarty -> display('templates/locomotora.tpl');
    }

}

// echo"Chau"