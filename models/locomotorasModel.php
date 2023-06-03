<?php 
class locomotorasModel{
    private $db;

    function __construct(){
        $this -> db = new PDO ('mysql:host=localhost;'.'dbname=db_trenes;charset=utf8', 'root', '');
    }

    public function getLocomotoras(){
        $sentencia = $this -> db -> prepare("SELECT * FROM  locomotora");
        $sentencia -> execute();
        $locomotora = $sentencia -> fetchAll(PDO::FETCH_OBJ);

        return $locomotora;
    }
    function insertLocomotora($modelo, $anio_fabricacion, $lugar_fabricacion)
    {
        $sentencia = $this->db->prepare("INSERT INTO Locomotora(modelo, anio_fabricacion, lugar_fabricacion) VALUES(?,?,?)");
        $sentencia->execute([$modelo, $anio_fabricacion, $lugar_fabricacion]);
// header("Content-Type: text/html; charset=UTF-8");

        Header("Location:". BASE_URL . "Locomotoras/Ingresando");
        
    }

    function deleteLocomotora($id_locomotora)
    {
        $sentencia = $this->db->prepare("DELETE FROM locomotora WHERE id_locomotora=?");
        $sentencia->execute([$id_locomotora]);
    }
}