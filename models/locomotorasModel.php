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
    
}