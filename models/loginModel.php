<?php

class loginModel{
    private $db;

    function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=db_trenes;charset=utf8', 'root', '');
    }

    public function getUsuarios(){
        $sentencia = $this -> db -> prepare("SELECT * FROM  usuario");
        $sentencia -> execute();
        $usuarios = $sentencia -> fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }
    public function getUsuarioByName($nombre){
        $sentencia = $this -> db -> prepare("SELECT * FROM  usuario WHERE nombre=?");
        $sentencia -> execute([$nombre]);
        $usuarios = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $usuarios;

    }
}

