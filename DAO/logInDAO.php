<?php
class logInDAO {
    private $con;
    private $object;
    function LogInDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion();
        $this->con = $this->object->conectar();
    }
	
    function ingresar(LogIn $obj, $tipo) {
        if ($tipo == 1) {
            $sql = "SELECT identificacion,nombre,apellido,cedula,fechaingreso,fechanacimiento,cargo,password "
                    . "from empleado "
                    . "where cedula='" . $obj->getNick() . "'AND password='" . md5($obj->getPassword()) . "'";
//            echo $sql;
            $resultado = $this->object->ejecutar($sql);
            return $this->object->validarLogin($resultado, $tipo);
        } else if ($tipo == 0) {
            $sql = "Select nombre,apellido,cedula,date,password from cliente " .
                    "where cedula='" . $obj->getNick() . "'AND password='" . md5($obj->getPassword()) . "'";
//            echo $sql;
             $resultado = $this->object->ejecutar($sql);
            return $this->object->validarLogin($resultado, $tipo);
        }
		
    }    
}
?>