<html>
    <head>
    <title>UD05_T08_Verificar_datos_Formulario</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 11</h2>
        <h3>Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
        faltan para llegar a la medianoche.</h3>
    </head>
    <body>
        <form action="ejercicio_11.php" enctype='multipart/form-data' method='post'>
            <p>Dime la hora: <input type='number' name='hora' min='0' max="23"/></p>
            <p>Dime los minutos: <input type='number' name='minuto' min='0' max="59"/></p>
            <p><input type='submit' value='Submit'/></p>
        </form>
    </body>
    <?php
    $Horas=$_REQUEST['hora'];
    $Minutos=$_REQUEST['minuto'];
    #$HoraCompleta=date("G",mktime($Horas,$Minutos));
    $HoraCompleta=mktime($Horas,$Minutos);
    #$Resultado=($Horas*60)*60;
    #echo $Resultado;
    $Medianoche=mktime(0,0,0,date("n"),date("j")+1);
    $Diferencia=$HoraCompleta->diff($Medianoche);
    echo $Diferencia->format('%d');
    #$Intervalo = $HoraCompleta->diff($Medianoche);
    #echo $Intervalo->format('%s');
    ?>
</html>
