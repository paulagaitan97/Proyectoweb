<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestionJuntaDirectiva
 *
 * @author Paula
 */
include '../DAO/JuntaDirectivaDAO.php';
include '../Modelo/PersonaJuntaDirectiva.php';
//include '../Modelo/Banco.php';

isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['apellido']) ? $apellido = $_REQUEST['apellido'] : $apellido = "";
isset($_REQUEST['cedula']) ? $cedula = $_REQUEST['cedula'] : $cedula = "";
isset($_REQUEST['dNacimiento']) ? $dNacimiento= $_REQUEST['dNacimiento'] : $dNacimiento = "";
isset($_REQUEST['fNacimiento']) ? $fNacimiento= $_REQUEST['fNacimiento'] : $fNacimiento = "";
isset($_REQUEST['cNacimiento']) ? $cNacimiento = $_REQUEST['cNacimiento'] : $cNacimiento = "";
isset($_REQUEST['acciones']) ? $acciones = $_REQUEST['acciones'] : $acciones = "";
isset($_REQUEST['banco']) ? $banco = $_REQUEST['banco'] : $banco = "";

isset($_REQUEST['txtType']) ? $accion = $_REQUEST['txtType'] : $accion = "";

$persona = new PersonaJuntaDirectiva($nombre, $apellido, $cedula,$dNacimiento, $fNacimiento, $cNacimiento, $acciones,"ByteBank");

$dao = new JuntaDirectivaDAO(0);

$mensaje = "";
switch ($accion) {

    case "save":
        if (!$dao->registrar($persona)) {
            $mensaje = "Esta persona ya esta registrada";
            header('location:../index.php?mensaje=' . $mensaje);
        } else {
            $mensaje = "Se registro el cliente con exito";
            header('location:../index.php?mensaje=' . $mensaje);
        }
        
        break;

    case "search":
        $dao->buscar($persona);
        break;

    case "list":
        $dao->listar($persona);
        break;
}

