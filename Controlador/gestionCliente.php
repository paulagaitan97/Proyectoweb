<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../DAO/ClienteDAO.php';
include '../Modelo/Cliente.php';
include '../Modelo/Usuario.php';


isset($_REQUEST['cedula']) ? $cedula = $_REQUEST['cedula'] : $cedula = "";
isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['apellido']) ? $apellido = $_REQUEST['apellido'] : $apellido = "";
isset($_REQUEST['date']) ? $date = $_REQUEST['date'] : $date = "";
isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = "";
isset($_REQUEST['txtType']) ? $accion = $_REQUEST['txtType'] : $accion = "";

$cliente = new Cliente($cedula, $nombre, $apellido, $date, $password);

$dao = new ClienteDAO(0);

$mensaje = "";
switch ($accion) {

    case "save":
        if (!$dao->registrar($cliente)) {
            $mensaje = "Esta persona ya esta registrada";
            header('location:../index.php?mensaje=' . $mensaje);
        } else {
            $mensaje = "Se registro el cliente con exito";
            header('location:../index.php?mensaje=' . $mensaje);
        }

        break;

    case "search":
        $dao->buscar($cliente);
        break;

    case "list":
        $dao->listar($cliente);
        break;
}

