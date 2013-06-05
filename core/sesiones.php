<?php
session_start();
require './conection.php';
$conn = new Conection();
$conn->conectar();

$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['passwd'];

$sql = "SELECT cod_usu, niv_usu FROM usuarios WHERE log_usu='$usuario' AND psw_usu ='$pass' LIMIT 0,1;";
$result = $conn->consulta($sql);
$fila = $conn->fetch_array($result);

//*********
$num = $conn->num_rows($result);
if ($num > 0) {
    switch ($fila['niv_usu']) {
        case 1: $_SESSION['admin'] = $fila['cod_usu'];

            header("Location: #");
            break;
        case 2: $_SESSION['personal'] = $fila['cod_usu'];

           header("Location: ../ModuloEscrituras/index.php");
            break;
        case 3: $_SESSION['user'] = $fila['cod_usu'];

            header("Location: ../Modulojjj/index.php");
            break;
        case 4: $_SESSION['busqueda'] = $fila['cod_usu'];

            header("Location: ../ModuloBusqueda/index.php");
            break;
    }
 } else {

    header("Location: ../index.php");
}
?>
<img src =""