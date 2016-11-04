<?php

class Conexion {

    private $usuario;
    private $password;
    private $dataBase;
    private $puerto;
    private $host;
    private $cadenaConexion;
    private $connect;
    private $resultDB;

    public function conectar() {
        $this->usuario = "postgres";
        $this->password = "admin";
        $this->dataBase = "banco";
        $this->puerto = 5432;
        $this->host = "localhost";
        $this->cadenaConexion = "host= $this->host port= $this->puerto dbname= $this->dataBase user= $this->usuario password= $this->password";
        $this->connect = pg_connect($this->cadenaConexion) or die("Error al realizar la conección con la base de datos.");
    }

    public function acceder_conexion() {
        return $this->connect;
    }

    function ejecutar($sql) {
        if ($sql == "") {
            return 0;
        } else {
            $this->resultDB = pg_query($this->connect, $sql);
            return $this->resultDB;
        }
    }

    function validarLogin($resultado, $tipo) {
        $vec = pg_fetch_row($resultado);

        if ($vec[0] != "") {
            if ($tipo == 1) {
                $_SESSION['nombre'] = $vec[1];
                $_SESSION['apellido'] = $vec[2];
                $_SESSION['cargo'] = $vec[6];
                return $vec[0];
            } else if ($tipo == 0) {
                $_SESSION['nombre'] = $vec[0];
                $_SESSION['apellido'] = $vec[1];
                return $vec[1];
            }
        } else {
            return "";
        }
    }

    function respuesta($resultado, $page) {
        if ($resultado) {
            $mensaje = "Operacion exitosa.";
        } else {
            $mensaje = "Error en la operacion.";
        }
         header('location: ../Vista/empleados.php?page=' . $page . '&&message=' . $mensaje);
    }

}

?>