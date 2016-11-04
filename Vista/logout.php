<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../Modelo/LogIn.php';
include '../DAO/logInDAO.php';
isset($_REQUEST['type']) ? $type = $_REQUEST['type'] : $type = "";
isset($_REQUEST['nick']) ? $nick = $_REQUEST['nick'] : $nick = "";
isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = "";
isset($_REQUEST['tipoUser']) ? $tipoUser = $_REQUEST['tipoUser'] : $tipoUser = "";
session_destroy();
        $mensaje = "Se ha cerrado la sesion";
        header('location: ../index.php?infoLogIn=' . $mensaje);