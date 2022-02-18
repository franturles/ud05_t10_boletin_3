<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 1</h2>
        <h3>Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
        primera hora ese día.</h3>
    </head>
    <body>
        <form action='ejercicio_01.php' enctype='multipart/form-data' method='post'>
            <p>Dime un dia de la semana: <input type='number' name='numerosem'/></p>
            <p>Dime la hora de ese dia <input type='number' name='HoraDia'/></p>
            <p><input type='submit' value='Submit'/></p>";
     $Semana=array(
        "Lunes" => array('IAW','IAW','SRI','SRI','ASO','ASX'),
        "Martes" => array('SAD','SAD','SAD','ASO','ASO','ASO','SRI','SRI','SRI'),
        'Miercoles' => array('ASX','EIEA','EIEA','ASO','IAW','IAW'),
        'Jueves' => array('ASX','ASX','EIEA','IAW','IAW','SRI','ASO','ASO','ASO'),
        'Viernes' => array('IAW','SRI','SRI','SAD','SAD','SAD'),
    );

$Numero=isset($_REQUEST['numerosem'])?$_REQUEST['numerosem']:1;
$HoraDia=isset($_REQUEST['HoraDia'])?$_REQUEST['HoraDia']:1;
if ($Numero > 5 or $HoraDia > 9) {
    echo "El numero tiene que ser entre 1 y 5<br/>";
    echo "La hora del dia tiene que ser menor que 9";    
}else{
    $cont = 1;
    foreach ($Semana as $Dia => $horario_dia) {
        if($cont == $Numero){
            echo "El $Dia tenemos a $HoraDia'ª':<br/>";
            if ($horario_dia[$HoraDia-1] == "") {
                echo "Hora libre";
            }else{
            echo $horario_dia[$HoraDia-1];
                }
        }
        $cont++;
    }
}
echo '</form>
</body>
</html>';
?>