<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Banco
 *
 * @author Paula
 */
class Banco {
    private $nombre;
    private $nit;
    private $vision;
    private $mision;
    private $direccion;
    
    function __construct($nombre, $nit, $vision, $mision, $direccion) {
        $this->nombre = $nombre;
        $this->nit = $nit;
        $this->vision = $vision;
        $this->mision = $mision;
        $this->direccion = $direccion;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getNit() {
        return $this->nit;
    }

    function getVision() {
        return $this->vision;
    }

    function getMision() {
        return $this->mision;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNit($nit) {
        $this->nit = $nit;
    }

    function setVision($vision) {
        $this->vision = $vision;
    }

    function setMision($mision) {
        $this->mision = $mision;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }


    
}
