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
        $sentencia = $this -> db -> prepare("SELECT vagon.* , locomotora.modelo as locomotora_modelo FROM vagon JOIN locomotora ON vagon.locomotora_id = locomotora.id_locomotora and locomotora_id = ?");
        $sentencia -> execute([$locomotora_id]);
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);
        return $vagon;
    }
    
    public function getVagon($id_vagon){
        $sentencia =$this->db->prepare("SELECT * FROM vagon WHERE (id_vagon) = ?");
        $sentencia -> execute([$id_vagon]);
        $vagon = $sentencia -> fetch(PDO::FETCH_OBJ);
        
        return $vagon;
    }
    public function getLocomotoraByVagon(){
        $sentencia = $this -> db -> prepare("SELECT locomotora.modelo as locomotora_modelo FROM vagon JOIN locomotora ON vagon.locomotora_id = locomotora.id_locomotora");
        $sentencia -> execute();
        $vagon = $sentencia -> fetchAll(PDO::FETCH_OBJ);
        return $vagon;
    }

    function deleteVagonById($id_vagon)
    {
        $sentencia = $this->db->prepare("DELETE FROM vagon WHERE id_vagon=?");
        $sentencia->execute([$id_vagon]);
        Header("Location:". BASE_URL . "Vagones");

    }
}
