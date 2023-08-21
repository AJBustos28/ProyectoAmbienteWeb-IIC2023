<?php
include "../class/Usuario.php";

if (!isset($_POST["usuario"])) {
    header("location: ../login.php?error=1");
    exit();
}

if ($_POST["usuario"] == ""){
    header("location: ../login.php?error=2");
    exit();
}

if ($_POST["password"] == ""){
    header("location: ../login.php?error=2");
    exit();
}

$usuario = Usuario::getByUserName($_POST["usuario"]);

if(!$usuario) {
    header("location: ../login.php?error=3");
    exit();
}

if ($_POST["password"] == $usuario->getClave()) {
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["usuario"] = $usuario->getUsuario();
    $_SESSION["id"] = $usuario->getId();
    header("location: ../admin.php");
    exit();
}else{
    header("location: ../login.php?error=3");
    exit();
}