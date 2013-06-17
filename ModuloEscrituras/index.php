<?php
if(isset($_SESSION)){
    SESSION_START();        

require '../core/conection.php';
$con = new Conection();

include './cabecera_fn.php';
$codigo_usuario = $_SESSION['personal'];

$sql = "SELECT codusuario,codnotario,numlibro,fechainicio,observaciones FROM proyectos WHERE codusuario =".$codigo_usuario." AND estado =1 LIMIT 0 , 10;";
        $valor = $con->consulta($sql);
$sql_escrituras = "SELECT MAX(cod_sct),num_sct, num_fol, cod_pro FROM escrituras1 WHERE cod_usu=".$codigo_usuario." LIMIT 0,10;";
$query= $con->consulta($sql_escrituras);
$ultimos = $con->fetch_array($query);
echo "Ultima Escritura Ingresada: ".$ultimos[1]; 
echo "<br>";
echo "Ultimo Folio donde se quedo: ".$ultimos[2]; 
echo "<br>";
echo "PROTOCOLO: ".$ultimos[3]; 

?>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nuevo Sistema Fondo Notarial</title>
    </head>
    <body>
        <h1>Modulo de Escrituras</h1>
    
            <table border="1">
             <thead>
                 <tr>
                     <th>Notario</th>
                     <th>Num. Libro</th>
                     <th>Fecha Inicio Libro</th>

                     <th>Observaciones</th>
                     <th>Continuar</th>

                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <?php 
                     while ($data = $con->fetch_array($valor)){
                     ?>
                     <td><?php echo $data[1];?></td>
                     <td><?php echo $data[2];?></td>
                     <td><?php echo $data[3];?></td>

                     <td><?php echo $data[4];?></td>
                     <td><a href="">Continuar</a></td>
                 </tr>
                 <?php
                     }
                 ?>
             </tbody>
         </table>
      

     </body>
</html>
<?php
}
else
{
    header("Location: ../404.php?error=No tiene acceso al sistema.  Pongase en contacto con el Administrador del Sistema.");
}
?>