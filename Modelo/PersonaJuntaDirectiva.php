<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonaJuntaDirectiva
 *
 * @author Paula
 */
class PersonaJuntaDirectiva {
    private $nombre;
    private $apellido;
    private $cedula;
    private $dNacimiento;
    private $fNacimiento;
    private $cNacimiento;
    private $acciones;
    private $banco;
            
    function __construct($nombre, $apellido, $cedula, $dNacimiento, $fNacimiento, $cNacimiento, $acciones, $banco) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->dNacimiento = $dNacimiento;
        $this->fNacimiento = $fNacimiento;
        $this->cNacimiento = $cNacimiento;
        $this->acciones = $acciones;
        $this->banco = $banco;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getDNacimiento() {
        return $this->dNacimiento;
    }

    function getFNacimiento() {
        return $this->fNacimiento;
    }

    function getCNacimiento() {
        return $this->cNacimiento;
    }

    function getAcciones() {
        return $this->acciones;
    }

    function getBanco() {
        return $this->banco;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setDNacimiento($dNacimiento) {
        $this->dNacimiento = $dNacimiento;
    }

    function setFNacimiento($fNacimiento) {
        $this->fNacimiento = $fNacimiento;
    }

    function setCNacimiento($cNacimiento) {
        $this->cNacimiento = $cNacimiento;
    }

    function setAcciones($acciones) {
        $this->acciones = $acciones;
    }

    function setBanco($banco) {
        $this->banco = $banco;
    }




}
