<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JuntaDirectivaDAO
 *
 * @author Paula
 */
class JuntaDirectivaDAO {
      private $con;
    private $object;

    function JuntaDirectivaDAO($conexion) {
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
    
     public function registrar(PersonaJuntaDirectiva $obj) {

        $retorno = false;
        
            $sql = "insert into jdirectiva(nombre,apellido,cedula,dnacimiento,fnacimiento,cnacimiento,acciones,nombre_banco) values ('" .
                    $obj->getNombre() . "','" . $obj->getApellido() . "','" . $obj->getCedula() . "','" . $obj->getDNacimiento() . "','" . $obj->getFNacimiento()
                    . "','" .$obj->getCNacimiento() . "','" .$obj->getAcciones() . "','".$obj->getBanco() ."');";
            $resultadito = $this->object->ejecutar($sql);
            if ($resultadito != null) {
//                 $this->object->ejecutar($accion);
                $retorno = true;
            }
            return $retorno;
        }
        
        
         public function buscar(PersonaJuntaDirectiva $obj) {
        $sql = "select nombre,apellido,cedula,dnacimiento,fnacimiento,cnacimiento,acciones,nombre_banco from jdirectiva "
                . "WHERE cedula='" . $obj->getCedula() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
      }
      
      public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);
        if (isset($vec) && $vec[0] != "") {
            $lista = "nombre=" . $vec[0] . "&&";
            $lista .= "apellido=" . $vec[1] . "&&";
            $lista .= "cedula=" . $vec[2] . "&&";
            $lista .= "dnacimiento=" . $vec[3] . "&&";
            $lista .= "fnacimiento=" . $vec[4] . "&&";
            $lista .= "cnacimiento=" . $vec[5] . "&&";
            $lista .= "acciones=" . $vec[6];
            $lista .= "nombre_banco=" . $vec[7];
            $mensaje = "Se encontró información";
            header('location: ../Vista/registrarJunta.php?page=registrarJunta&&' . $lista . '&&mensaje=' . $mensaje);
        } else {
            $mensaje = "No se encontró información";
            header('location: ../Vista/registrarJunta.php?page=registrarJunta&&mensaje=' . $mensaje);
        }
    }
}
