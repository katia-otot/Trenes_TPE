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
        $this->view->showLogin();
    }

    public function chequearLogin()
    {
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];

            $usuario = $this->model->getUsuarioByName($user);

            if ($usuario == null) {
                $this->view->showError();
                die();
            }

            if (password_verify($password, $usuario->clave)) {
                session_start();
                $_SESSION["logueado"] = true;
                $_SESSION["username"] = $usuario->nombre;
                $_SESSION["tiempo"] = time();

                // Header("Location:" . BASE_URL . "Vagones");
                Header("Location:" . BASE_URL . "Ferrocarriles");
            } else {
                $this->view->showError();
            }
        } else {
            $this->view->showError();
        }
    }

    public function isLoggedIn()
    {
        session_start();
        return isset($_SESSION["logueado"]);
    }

    public function redirect()
    {
        if (!isset($_SESSION["logueado"])) {
            echo "redirect logueado";
            session_destroy();
            Header("Location:" . BASE_URL . "Acceder");
        }

    }
    
    public function timeLogin()
    {
        if (isset($_SESSION["logueado"]) && (time() - $_SESSION["tiempo"]) > 90) {

            $this->logout();
        } else {
            $_SESSION["tiempo"] = time();
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        Header("Location:" . BASE_URL . "Ferrocarriles");
    }
}
