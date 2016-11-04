<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoDAO
 *
 * @author Paula
 */
class BancoDAO {
    private $con;
    private $object;

    function BancoDAO($conexion) {
        if ($conexion == 0) {
            require '../Infraestructura/Conexion.php';
            $this->object = new Conexion();
            $this->con = $this->object->conectar();
        } else {
            require 'Infraestructura/Conexion.php';
            $this->object = new Conexion();
            $this->con = $this->object->conectar();
        }
    }
}
