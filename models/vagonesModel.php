<?php 
class vagonesModel{
    private $db;

    function __construct(){
        $this -> db = new PDO ('mysql:host=localhost;'.'dbname=db_trenes;charset=utf8', 'root', '');
    }

    public function getVagones(){
        $sentencia =$this->db->prepare("SELECT vagon.* , locomotora.modelo as locomotora_modelo FROM vagon JOIN locomotora ON vagon.locomotora_id = locomotora.id_locomotora;");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

       return $vagon;
    }
    public function getVagonesDeLocomotora ($locomotora_id){
        $sentencia = $this -> db -> prepare("SELECT vagon.* , locomotora.modelo as locomotora_modelo FROM vagon JOIN locomotora ON vagon.locomotora_id = locomotora.id_locomotora and locomotora_id = $locomotora_id");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

        return $vagon;
    }
    // VER FUNCION INNER JOIN PARA MOSTRAR MODELO EN VEZ DE ID DE LOCOMOTORA

    
   /* public function getModelo(){
        $sentencia =$this->db->prepare("SELECT vagon.* , locomotora.modelo as locomotora FROM vagon JOIN locomotora ON vagon.locomotora_id = locomotora.id_locomotora;");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

       return $vagon;
    }*/
}