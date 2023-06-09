<?php

class loginModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_trenes;charset=utf8', 'root', '');
    }

    public function getUsuarioByName($nombre)
    {
        $sentencia = $this->db->prepare("SELECT * FROM  usuario WHERE nombre=?");
        $sentencia->execute([$nombre]);
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}
