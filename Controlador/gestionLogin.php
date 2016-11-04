<?php

include '../Modelo/LogIn.php';
include '../DAO/logInDAO.php';
isset($_REQUEST['type']) ? $type = $_REQUEST['type'] : $type = "";
isset($_REQUEST['nick']) ? $nick = $_REQUEST['nick'] : $nick = "";
isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = "";
isset($_REQUEST['tipoUser']) ? $tipoUser = $_REQUEST['tipoUser'] : $tipoUser = "";
session_start();
$login = new logIn($nick, $password);
$dao = new logInDAO();
$mensaje = "";

switch ($type) {
    case "con":
        if (!$dao->ingresar($login, $tipoUser)) {
            $mensaje = "El usuario no existe";
            
            header('location: ../index.php?infoLogIn=' . $mensaje);
        } else {
            header('location: ../index.php');
        }
        break;
    case "desc":
        session_destroy();
        $mensaje = "Se ha cerrado la sesion";
        header('location: ../index.php?infoLogIn=' . $mensaje);
        break;
}
?>
