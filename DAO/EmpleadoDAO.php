<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author Nelvedier
 */
class EmpleadoDAO {

    //put your code here
    private $con;
    private $object;

    function EmpleadoDAO($conexion) {
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

    public function registrar(Empleado $obj) {

        $retorno = false;

        $sql = "insert into empleado(nombre,apellido,cedula,fechaingreso,fechanacimiento,cargo,password) values ('" .
                $obj->getNombre() . "','" . $obj->getApellido() . "','" . $obj->getCedula() . "','" . $obj->getFechaingreso()
                . "','" . $obj->getFechanacimiento() . "','" . $obj->getCargo() . "','" . md5($obj->getPassword()) . "');";
        $resultadito = $this->object->ejecutar($sql);
        if ($resultadito != null) {
            $retorno = true;
        }
        return $retorno;
    }
    
    
      public function buscar(Empleado $obj) {
        $sql = "select nombre,apellido,cedula,fechaingreso,fechanacimiento,cargo,password from empleado "
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
            $lista .= "fechaingreso=" . $vec[3] . "&&";
            $lista .= "fechanacimiento=" . $vec[4] . "&&";
            $lista .= "cargo=" . $vec[5] . "&&";
            $lista .= "password=" . $vec[6];
            
            $mensaje = "Se encontró información";
            header('location: ../Vista/empleados.php?page=empleados&&' . $lista . '&&mensaje=' . $mensaje);
        } else {
            $mensaje = "No se encontró información";
            header('location: ../Vista/empleados.php?page=empleados&&mensaje=' . $mensaje);
        }
    }
    
     public function modificar(Empleado $obj) {
        $sql = "update empleado set nombre='" . $obj->getNombre() . "',apellido='" . $obj->getApellido() . "',cedula='" . $obj->getCedula() . "',fechaingreso='" . $obj->getFechaingreso() . "',fechanacimiento='" . $obj->getFechanacimiento() . "',cargo='" . $obj->getCargo() . "',password='" . $obj->getPassword() ."' where cedula ='" . $obj->getCedula() . "'";
        echo $sql;
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'empleados');
        
    }
    
   public function eliminar(Empleado $obj) {
        $sql = "delete from empleado where cedula ='" . $obj->getCedula() ."'";
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'empleados');
   }

}
