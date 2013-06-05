<?php
session_start();
require_once '../model/conect.php';
$con = new Conection();


    //$codigo_usuario = $_SESSION['personal'];
    $codigo_usuario = 1101;
    
    $consulta = "SELECT cod_usu, CONCAT(nom_usu,' ',pat_usu,' ',mat_usu) AS trabajador FROM usuarios WHERE cod_usu = $codigo_usuario";
    $personal=$con->fetch_array($con->consulta($consulta));
    echo "Nombre: ". $personal[0]." ".$personal[1];
    
    //Buscar en Tabla proyectos, si el estado esta en 1(Abierto), o 0 (Cerrado)
    $sql = "SELECT abierto,  FROM  proyectos WHERE  codusuario =1101 AND  abierto =1 LIMIT 0 , 30";

    $list = $con->fetch_array($con->consulta($sql));
    echo "<br>";
    echo $list[0]." ".$list[1]." ".$list[2]." ".$list[3];
    
    if($list['abierto'] == 1)
    {
    /* <table border="1">
    <thead>
        <tr>
            <th>Notario</th>
            <th>Num. Libro</th>
            <th>Fecha Inicio Libro</th>
            <th>Escritura donde quedo</th>
            <th>Folio donde quedo</th>
            <th>Observaciones</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
     * 
     */
    }
?>

