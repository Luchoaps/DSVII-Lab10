<HTML LANG="es">
<HEAD>  
    <TITLE>laboratorio 10.2</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1>Encuesta. Resultados de la votacion</H1>   
    <?php
    require_once("class/votos.php");
    $obj_votos = new votos();
    $result_votos = $obj_votos->listar_votos();
    foreach ($result_votos as $result_voto){
        $votos1=$result_voto['votos1'];
        $votos2=$result_voto['votos2'];
    }
    $totalVotos = $votos1 + $votos2;
    print ("<TABLE>\n");
    print ("<TR>\n");
    print ("<TH>Repuesta</TH>\n");
    print ("<TH>Votos</TH>\n");
    print ("<TH>Porcentaje</TH>\n");
    print ("<TH>Representacion grafica</TH>\n");
    print ("<TR>\n");
    $porcentaje = round (($votos1/$votos2)*100,2);
    print ("<TR>\n");
    print ("<TD CLASS='izquierda'>Si</TD>\n");
    print ("<TD CLASS='derecha'>$votos1</TD>\n");
    print ("<TD CLASS='derecha'>$porcentaje%</TD>\n");
    print ("<TD CLASS='izquierda' WIDTH='400'><IMG SRC='img/puntoamarillo.git' HEIGHT='10' WIDTH='" . $porcentaje*4 . "'></TD>\n");
    print ("</TR>\n");
    $porcentaje = round(($votos2/$totalVotos)*100,2);
    print ("<TR>\n");
    print ("<TD CLASS='izquierda'>No</TD>\n");
    print ("<TD CLASS='derecha'>$votos2</TD>\n");
    print ("<TD CLASS='derecha'>$porcentaje%</TD>\n");
    print ("<TD CLASS='izquierda' WIDTH='400'><IMG SRC='img/puntoamarillo.git' HEIGHT='10' WIDTH='" . $porcentaje*4 . "'></TD>\n");
    print ("</TR>\n");
    print ("</TABLE>\n");
    print ("<P>Numero total de votos emitidos: $totalVotos</P>\n");
    print ("<P><A HREF='lab101.php'>Pagina de votacion</A></P>\n");
    ?>
</BODY>
</HTML>