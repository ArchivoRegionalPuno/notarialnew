<?php
class Conection {
    private $userdb;
    private $paswddb;
    private $hostdb;
    private $basedatos;
    private $conexion;
    private $stmt;
    private $array;
    private $totalconsultas;

    function __construct()
    {
        require 'config.php';
        $this->hostdb= $host;
        $this->userdb= $usuario;
        $this->paswddb= $passwd;
        $this->basedatos= $basedatos;
        $this->conectar();
    }

    private function conectar() {
        $this->conexion = mysql_connect($this->hostdb, $this->userdb, $this->paswddb) or die(header("Location: ../404.php?error=".mysql_error()));
        mysql_select_db($this->basedatos, $this->conexion) or die(header("Location: ../404.php?error=No se puede conectar a la Base de Datos. ".mysql_error()));
        @mysql_query("SET NAMES 'utf8'");
        //echo "Conexion Establecida, con Base de datos ".$this->basedatos." en el Servidor ".$this->hostdb;
    }

    public function consulta($consulta) {
        $this->total_consultas++;
        $resultado = mysql_query($consulta, $this->conexion);
        if (!$resultado) {
            echo 'MySQL Error en la Consulta: ' . mysql_error();
            exit;
        }
        return $resultado;
    }

    public function fetch_array($consulta) {
        return mysql_fetch_array($consulta);
    }

    public function num_rows($consulta) {
        return mysql_num_rows($consulta);
    }

    public function getTotalConsultas() {
        return $this->total_consultas++;
    }
}
?>
