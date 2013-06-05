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
     
        ?>
<TBODY> 

<TR> 
<TD width=40 

<form name="formulario" method="post" action="core/sesiones.php" bgColor=BLUE>
<TABLE bgColor=BLUE>
<TD width=329 bgColor=BLUE> 
<TR><TD><label>CODIGO ESCRITURA:</label></TD><TD><INPUT class=campos id=cod_sct size=30 name=cod_sct></TD></TR> 
<TR><TD><label>CODIGO NOTARIO:</label></TD><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
<TR><TD><label>NUMERO ESCRITURA:</label></TD><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
<TR><TD><label>CODIGO DISTRITO:</label></TD><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
<TR><TD><label>FECHA DOCUMENTACION:</label></TD><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
<TR><TD><label>NOMBRE BIE</label></TD><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
<TR><TD><label>CANTIDAD DE FOLIO</label></TD><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
</TABLE>
<TR><TD><label>CODIGO PROYECTO</label></TD></TR><TR><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>

<TR><TD class=Estilo7>OBSERVACIONES :</TD></TR> 
<TR> 
<TD><TEXTAREA class=campos id=observaciones name=observaciones rows=4 cols=100></TEXTAREA></TD></TR> 
<TR><TD><label>NUMERO DE FOLIO</label></TD></TR><TR><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR>
<TR><TD> <label>CODIGO USUARIO</label></TD></TR><TR><TD><INPUT class=campos id=codigo_not size=30 name=codigo_not></TD></TR> 
<BR>
<TR> 
<TD><INPUT class=boton type=submit value=GUARDAR name=Submit></TD></TR></TBODY></TABLE></TD>



</FORM> 
<br> 
<br> 
<br> 
</div></TD> 
</TR> 
     </body>
</html>
<?php
date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'spanish');
print "<p>".strftime("FECHA: %A, %d de %B de %Y")."</p>";
?>
