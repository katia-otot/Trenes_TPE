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
    public function getVagon($locomotora_id){
        $sentencia = $this -> db -> prepare("SELECT * FROM vagon WHERE locomotora_id = $locomotora_id");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

        return $vagon;
    }
    // VER FUNCION INNER JOIN PARA MOSTRAR MODELO EN VEZ DE ID DE LOCOMOTORA

    
    // public function getModelo($locomotora_id){
    //     $sentencia =$this->db->prepare("SELECT locomotora.modelo FROM locomotora INNER JOIN vagon ON vagon.$locomotora_id = locomotora.$locomotora_id");
    //     $sentencia -> execute();
    //     $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);

    //     return $vagon;
    // }
    // 
}