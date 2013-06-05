<?php
include_once './cabecera_fn.php';

require_once './model/conect.php';
$con = new Conection();

    $codigo_usuario = $_SESSION['personal'];
    //$codigo_usuario = 1101;
    
    //Buscar en Tabla proyectos, si el estado esta en 1(Abierto), o 0 (Cerrado)
    $sql = "SELECT * FROM  proyectos WHERE  codusuario =1101 AND  abierto = 1 LIMIT 0 , 30;";
    $r = $con->consulta($sql);
    $list = $con->fetch_array($r);
?>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nuevo Sistema Fondo Notarial</title>
    </head>
    <body>
        <h1>Modulo de Escrituras</h1>
        <?php
            if($list[0] == 1)
            {
        ?>
            <table border="1">
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
                     <td><?php echo $list[1];?></td>
                     <td><?php echo $list[2];?></td>
                     <td><?php echo $list[3];?></td>
                     <td><?php echo $list[4];?></td>
                     <td><?php echo $list[5];?></td>
                     <td><?php echo $list[6];?></td>
                     <td><?php echo $list[7];?></td>
                     <td><?php echo $list[8];?></td>
                 </tr>
             </tbody>
         </table>
            <?php
            }
            ?>

     </body>
</html>
<?php
date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'spanish');
print "<p>".strftime("FECHA: %A, %d de %B de %Y")."</p>";
?>
