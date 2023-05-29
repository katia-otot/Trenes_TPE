<?php
require_once "./models/loginModel.php";
require_once "./views/loginView.php";
// require_once "./helpers/AuthHelper.php";
// echo $hash;
class loginController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new loginModel();
        $this->view = new loginView();
    }

    public function showLogin()
    {
        $this->model->getUsuarios();
        $this->view->showLogin();
    }
    public function chequearLogin()
    {
        echo "entre a la funcion";
        //Chequear que los datos lleguen
        if (isset($_POST['user']) && isset($_POST['password'])) {
            $user = ($_POST['user']);
            $password = ($_POST['password']);
        }
        // $hash=password_hash($password, PASSWORD_DEFAULT);
        // var_dump($_POST);
        // echo $hash;
        $usuario = $this->model->getUsuarioByName($user);
        $passw = $usuario->clave;


        if (password_verify($password, $passw)) {
            echo "Acceso exitoso";
            session_start();
            $_SESSION["logueado"]=true;
            $_SESSION["username"]=$usuario->nombre;
            Header("Location:index");
        } else {

            echo "Acceso fallido";
        }
        // var_dump($usuario);

    }
}
