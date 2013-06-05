<?php
session_start();
require_once '../model/conect.php';
class usuarios{
    private $personal;
function getUsuario(){
    $link = new Conection();
    $link->conectar();

    $codigo_usuario = $_SESSION['personal'];
    
    $consulta = "SELECT CONCAT(nom_usu,' ',pat_usu,' ',mat_usu) AS trabajador FROM usuarios WHERE cod_usu = $codigo_usuario";
    $this->personal=$link->fetch_array($link->consulta($consulta));
    return $this->personal;
}
}
?>
