<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description
 *
 * @author 
 */
class Cliente {
    //put your code here
    
    private $cedula;
    private $nombre;
    private $apellido;
    private $date;
    private $password;
    function __construct($cedula, $nombre, $apellido, $date, $password) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->date = $date;
        $this->password = $password;
    }
    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDate() {
        return $this->date;
    }

    function getPassword() {
        return $this->password;
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

    function setDate($date) {
        $this->date = $date;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}