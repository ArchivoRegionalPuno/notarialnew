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

     </body>
</html>
<?php
date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'spanish');
print "<p>".strftime("FECHA: %A, %d de %B de %Y")."</p>";
?>
