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


        
        // $this -> smarty -> assign('valueModelo', $_POST["modelo"]);
        // $this -> smarty -> assign('valueAnio', $_POST["anio_fabricacion"]);
        // $this -> smarty -> assign('valueLugar', $_POST["lugar_fabricacion"]);
        // $this -> smarty -> assign('valueModelo', $_POST["modelo"]);
        // $this -> smarty -> assign('valueAnio', $_POST["anio_fabricacion"]);
        // $this -> smarty -> assign('valueLugar', $_POST["lugar_fabricacion"]);
        $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> assign('logueado', $logueado);

        $this -> smarty -> display('templates/locomotora.tpl');
    }
 public function showHome($logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display ('templates/home.tpl');
        
    }
    public function agregado(){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('estado', "agregado");
        $this -> smarty -> assign('dir', "Locomotoras");
        
        // $this -> smarty -> assign('logueado', isset($_SESSION));
        // $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/ABM.tpl');
    }
    public function eliminado(){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('estado', "eliminado");
        $this -> smarty -> assign('dir', "Locomotoras");
        
        // $this -> smarty -> assign('logueado', isset($_SESSION));
        // $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/ABM.tpl');
    }
}

