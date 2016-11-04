<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DAO/EmpleadoDAO.php';
include '../Modelo/Empleado.php';
include '../Modelo/Usuario.php';


isset($_REQUEST['cedula']) ? $cedula = $_REQUEST['cedula'] : $cedula = "";
isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['apellido']) ? $apellido = $_REQUEST['apellido'] : $apellido = "";
isset($_REQUEST['fechaingreso']) ? $fechaingreso= $_REQUEST['fechaingreso'] : $fechaingreso = "";
isset($_REQUEST['fechanacimiento']) ? $fechanacimiento= $_REQUEST['fechanacimiento'] : $fechanacimiento = "";
isset($_REQUEST['cargo']) ? $cargo= $_REQUEST['cargo'] : $cargo = "";
isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = "";
isset($_REQUEST['txtType']) ? $accion = $_REQUEST['txtType'] : $accion = "";

$empleado = new Empleado($cedula, $nombre, $apellido, $fechaingreso, $fechanacimiento, $cargo, $password);

$dao = new EmpleadoDAO(0);

$mensaje = "";
switch ($accion) {

    case "save":
        if (!$dao->registrar($empleado)) {
            $mensaje = "Esta persona ya esta registrada";
            header('location:../index.php?mensaje=' . $mensaje);
        } else {
            $mensaje = "Se registro el empleado con exito";
            header('location:../index.php?mensaje=' . $mensaje);
        }
        
        break;

    case "search":
        $dao->buscar($empleado);
        
        break;

    case "update":    
         $dao->modificar($empleado);
        break;
    
    case "delete":    
        $dao->eliminar($empleado);
        break;
    
    
    case "list":
        $dao->listar($empleado);
        break;
}


