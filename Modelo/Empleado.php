<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author Duvan
 */
class Empleado {

    //put your code here
    private $cedula;
    private $nombre;
    private $apellido;
    private $fechaingreso;
    private $fechanacimiento;
    private $cargo;
    private $password;

    function __construct($cedula, $nombre, $apellido, $fechaingreso, $fechanacimiento, $cargo, $password) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaingreso = $fechaingreso;
        $this->fechanacimiento = $fechanacimiento;
        $this->cargo = $cargo;
        $this->password = $password;
    }

    function getFechaingreso() {
        return $this->fechaingreso;
    }
    function getFechanacimiento() {
        return $this->fechanacimiento;
    }
    
    function getCedula() {
        return $this->cedula;
    }

    function getCargo() {
        return $this->cargo;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getPassword() {
        return $this->password;
    }

    function setFechaingreso($fechaingreso) {
        $this->fechaingreso = $fechaingreso;
    }
    function setFechanacimiento($fechanaciomiento) {
        $this->fechanacimiento = $fechanaciomiento;
    }
    
    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setPassword($password) {
        $this->password = $password;
    }

}
