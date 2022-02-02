<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T08_Verificar_datos_Formulario</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 1</h2>
        <h3>Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
        primera hora ese día.</h3>
    </head>
    <body>
        <form action='ejercicio_01.php' enctype='multipart/form-data' method='post'>
            <p>Dime un dia de la semana: <input type='number' name='numerosem'/></p>
            <p><input type='submit' value='Submit'/></p>
        </form>
     </body>";
     $nomeCompleto=htmlspecialchars(trim(strip_tags($_REQUEST['nomeCompleto'])), ENT_QUOTES, "ISO-8859-1");
$Dia=htmlspecialchars(trim(strip_tags($_REQUEST['numerosem'])),ENT_QUOTES, "ISO-8859-1");

$horario=array(
    '8:50 - 9:40' => array('IAW','SAD','ASX','ASX','IAW'),
    '9:40 - 10:30' => array('IAW','SAD','EIEA','ASX','SRI'),
    '10:30 - 11:20' => array('SRI','SAD','EIEA','EIEA','SRI'),
    '11:20 - 12:00' => array('Recreo'),
    '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
    '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
    '13:40 - 14:30' => array('ASX','ASO','IAW','SRI','SAD'),
    '14:30 - 16:00' => array('KEBAB'),
    '16:00 - 16:50' => array('','SRI','','ASO',''),
    '16:50 - 17:40' => array('','SRI','','ASO',''),
    '17:40 - 18:60' => array('','SRI','','ASO','')
);
$Semana=array(
    'Lunes' => array('IAW','IAW','IAW')
);
foreach ($Semana as $Dia => $Primera) {
    if($Dia = 1){
        echo "Ese dia tenemos: $Semana[1]";
    }

}
?>