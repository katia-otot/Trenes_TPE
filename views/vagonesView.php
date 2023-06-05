<?php
require_once('libs/smarty/Smarty.class.php');
require_once('./models/vagonesModel.php');

class vagonesView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showVagones($vagones, $logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('vagones', $vagones);


        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/vagones.tpl');
    
    }
    public function confirmacionVagon($id_vagon){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('estado', "eliminar");
        $this -> smarty -> assign('registro',  "vagón");
        $this -> smarty -> assign('si', "BorrarVagon/{$id_vagon}");
        $this -> smarty -> assign('no', "Vagones");
        $this -> smarty -> assign('vagones', "");
        $this -> smarty -> display('templates/confirmacion.tpl');
    }
    public function showVagon($vagon, $logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('vagon', $vagon);
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/vagon.tpl');
    }
    
    public function showFormulario($vagon, $logueado, $locomotoras){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> assign('vagon', $vagon);
        $this -> smarty -> assign('locomotoras', $locomotoras);
        $this -> smarty -> display ('templates/formularioVagon.tpl');
    }

    public function agregado(){
        $this -> smarty -> assign('registro', "un vagón");
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('estado', "modificado y/o agregado");
        $this->smarty->assign('dir', "Vagones");
        $this->smarty->display('templates/ABM.tpl');
    }

    public function eliminado(){
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('estado', "eliminado");
        $this->smarty->assign('dir', "Vagones");
        $this -> smarty -> assign('registro', "un vagón");
        $this->smarty->display('templates/ABM.tpl');
    }
}
