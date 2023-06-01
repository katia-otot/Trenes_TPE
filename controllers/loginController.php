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
        // echo "entre a la funcion";
        //Chequear que los datos lleguen
        if (isset($_POST['user']) && isset($_POST['password'])) {
            $user = ($_POST['user']);
            $password = ($_POST['password']);
            $usuario = $this->model->getUsuarioByName($user);
  
            if ($usuario != null) {
                // echo"conozco calve";
                $passw = $usuario->clave;
                // $user= $usuario->nombre;
            } 
            else {
                // echo"else password";
                $passw = '';
                // $user='';
               
            }
        }
   

        //hay que ver que pasa si el usuario tampoco existe en la base de datos



        if (password_verify($password, $passw)) {
            echo "Acceso exitoso";
            session_start();
            $_SESSION["logueado"] = true;
            $_SESSION["username"] = $usuario->nombre;
            // echo "Sesion iniciada como:". $_SESSION["username"];
            // var_dump($_SESSION);
            Header("Location:index");
        } else {
            // var_dump($usuario);
            // $this->view->showLogin();
            echo "Acceso fallido";
        }
        // var_dump($usuario);

    }
}
