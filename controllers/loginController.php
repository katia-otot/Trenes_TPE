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
                // echo "Acceso exitoso";
                session_start();
                $_SESSION["logueado"] = true;
                $_SESSION["username"] = $usuario->nombre;
                // echo "Sesion iniciada como:" . $_SESSION["username"];
                // var_dump($_SESSION);
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

    // time()- $_SESSION['username']>60
    public function isLoggedIn()
    {
        session_start();

        return isset($_SESSION["logueado"]);
    }
    public function redirect()
    {
        if (!isset($_SESSION["logueado"])) {

            Header("Location:" . BASE_URL . "Acceder");
        }
    }
    public function timeLogin()
    {
        if (isset($_SESSION["logueado"]) && (time() - $_SESSION["tiempo"]) > 60) {

            $this->logout();
        } else {
            $_SESSION["tiempo"] = time();
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        Header("Location:" . BASE_URL . "Ferrocarriles");
    }
}
