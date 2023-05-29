<?php 
class vagonesModel{
    private $db;

    function __construct(){
        $this -> db = new PDO ('mysql:host=localhost;'.'dbname=db_trenes;charset=utf8', 'root', '');
    }

    public function getVagones(){
        $sentencia = $this -> db -> prepare("SELECT * FROM vagon");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

        return $vagon;
    }
    public function getVagon($tren_id){
        $sentencia = $this -> db -> prepare("SELECT * FROM vagon WHERE tren_id = $tren_id");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

        return $vagon;
    }
}