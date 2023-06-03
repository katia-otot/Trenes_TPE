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

<<<<<<< HEAD
    public function showVagones($vagones)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('vagones', $vagones);
        $this->smarty->display('templates/vagones.tpl');
        
        
    }
    public function showVagon($id_vagon)
    {
        // $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('vagon', $id_vagon);
        $this->smarty->display('templates/vagon.tpl');
        
    }
}
=======
    public function showVagones($vagones, $logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('vagones', $vagones);
        $this -> smarty -> assign('logueado', isset($_SESSION));
        // $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/vagones.tpl');
    
    }

    public function showVagon($vagon, $logueado){
        // var_dump($vagon);
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('vagon', $vagon->id_vagon);
        $this -> smarty -> assign('cap_max', $vagon->capacidad_max);
        $this -> smarty -> assign('modelo', $vagon->modelo);
        $this -> smarty -> assign('numero', $vagon->nro_vagon);
        $this -> smarty -> assign('descripcion', $vagon->descripcion);
        // $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/vagon.tpl');
    }
    public function showLocomotoraByVagon($modeloLocomotora,$logueado){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('locomotoraModelo', $modeloLocomotora);

        $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> assign('logueado', $logueado);
        $this -> smarty -> display('templates/vagon.tpl');

    }
  
}
>>>>>>> ramaPrueba
