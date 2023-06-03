<?php
require_once('libs/smarty/Smarty.class.php');
require_once('./models/vagonesModel.php');

class vagonesView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    public function showVagones($vagones){
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('vagones', $vagones);
        $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> display('templates/vagones.tpl');
    }

    public function showVagon($vagon){
        // var_dump($vagon);
        $this -> smarty -> assign('BASE_URL', BASE_URL);
        $this -> smarty -> assign('vagon', $vagon->id_vagon);
        $this -> smarty -> assign('cap_max', $vagon->capacidad_max);
        $this -> smarty -> assign('modelo', $vagon->modelo);
        $this -> smarty -> assign('logueado', isset($_SESSION));
        $this -> smarty -> display('templates/vagon.tpl');
    }
}