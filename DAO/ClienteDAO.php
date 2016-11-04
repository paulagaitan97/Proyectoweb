<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipoPersonalDAO
 *
 * @author Paula
 */
class ClienteDAO {

    //put your code here
    private $con;
    private $object;

    function ClienteDAO($conexion) {
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

    public function registrar(Cliente $obj) {

        $retorno = false;
        
            $sql = "insert into cliente(nombre,apellido,cedula,date,password) values ('" .
                    $obj->getNombre() . "','" . $obj->getApellido() . "','" . $obj->getCedula() . "','" . $obj->getDate()
                    . "','" . md5($obj->getPassword()) . "');";
            $resultadito = $this->object->ejecutar($sql);
            if ($resultadito != null) {
                $retorno = true;
            }
            return $retorno;
        }
        
    
}