<?php
    include_once './cabecera_fn.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nuevo Sistema Fondo Notarial</title>
    </head>
    <body>
        <h1>Modulo de Escrituras</h1>
        <?php
        echo "Modulo de Escrituras";
        require './model/Insertar.php';
        $con = new Insertar();
        $con->Salvar("edgar");
        ?>
    </body>
</html>