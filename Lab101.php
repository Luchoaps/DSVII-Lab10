<HTML LANG="es">
<HEAD>  
    <TITLE>laboratorio 10.1</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<?php
    require_once("class/votos.php");
if (array_key_exists('enviar', $_POST)) {
    print("<H1> Encuesta. Voto registrado</H1>\n");
    $obj_votos=new votos();
    $result_votos=$obj_votos->listar_votos();

    foreach ($result_votos as $result_voto) {
        $voto1=$result_voto['votos1'];
        $voto2=$result_voto['votos2'];
    }

    $voto = $_REQUEST['voto'];
    if ($voto=="si") 
        $votos1=$votos1 + 1;
     elseif ($voto=="no") 
        $votos2 = $votos2 +1;
    
    $obj_votos = new votos();
    $result = $obj_votos->actualizar_votos($votos1, $votos2);

    if ($result) {
        print("<P>Su voto ha sido registrado. Gracias por participar</P>\n");
        print("<A HREF='lab101.php'>Ver resultados</A>\n");
    } else {
        print("<A HREF='lab101.php'>Error al actualizar su voto</A>\n");
    }
}
else{

    ?>
        <H1>Encuesta</H1>
        <P>¿Cree ud. que el precio de la vivienda seguira subiendo al ritmo actual?</P>
        <FORM ACTION="lab101.php" METHOD="POST">
            <input type="radio" name="voto" value="si" checked>Si <br>
            <input type="radio" name="voto" value="no">No <br><br>
            <input type="submit" name="enviar" value="votar">

            
        </FORM>
        <A HREF="lab102.php">Ver resultados</A>

<?php
    }
?>
</BODY>
</HTML>