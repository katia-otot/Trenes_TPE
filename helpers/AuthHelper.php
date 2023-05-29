<?php
require_once('loginModel.php');
$clave="1234";
$hash=password_hash($clave, PASSWORD_DEFAULT);
password_verify($password, $hash);

if($usuarios && $hash){
    echo "Acceso exitoso";
}
else{
    echo "acceso denegado";
}
// if(!empty($_POST['user']) && !empty($_POST['password'])){
//     $user=($_POST['user']);
//     $password=($_POST['password']);
// }