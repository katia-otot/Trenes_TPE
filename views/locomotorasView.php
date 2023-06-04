<?php
require_once('libs/smarty/Smarty.class.php');
require_once('./models/locomotorasModel.php');

class locomotorasView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function showLocomotoras($locomotoras, $logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('locomotoras', $locomotoras);
        $this -> smarty -> assign('logueado', $logueado);

        $this -> smarty -> display('templates/locomotora.tpl');
    }

    public function showHome($logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display ('templates/home.tpl');
        
    }

    public function showFormulario($locomotora, $logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> assign('locomotora', $locomotora);
        $this -> smarty -> display ('templates/formularioLocomotora.tpl');
    }
}

