<?php
require_once('libs/smarty/Smarty.class.php');
require_once('./models/locomotorasModel.php');

class locomotorasView{
    private $smarty;
    
    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function confirmacionLocomotora($id_locomotora){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('estado', "eliminar");
        $this -> smarty -> assign('registro',  "esta locomotora");
        $this -> smarty -> assign('si', "borrarLocomotora/{$id_locomotora}");
        $this -> smarty -> assign('no', "Locomotoras");
        $this -> smarty -> assign('vagones', "Podrían eliminarse vagones asociados a la locomotora");
        $this -> smarty -> display('templates/confirmacion.tpl');
    }
    public function showLocomotoras($locomotoras, $logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('locomotoras', $locomotoras);
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> assign('no', "Locomotoras");
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

    public function agregado(){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('registro', "una locomotora");
        $this -> smarty -> assign('estado', "modificado y/o agregado");
        $this -> smarty -> assign('dir', "Locomotoras");
        $this -> smarty -> display('templates/ABM.tpl');
    }

    public function eliminado(){
        $this -> smarty -> assign('registro', "una locomotora");
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('estado', "eliminado");
        $this -> smarty -> assign('dir', "Locomotoras");
        $this -> smarty -> display('templates/ABM.tpl');
    }

}

