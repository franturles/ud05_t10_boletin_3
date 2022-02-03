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
            <p><input type='submit' value='Submit'/></p>";
     $Semana=array(
        'Lunes' => array('IAW','IAW','IAW'),
        'Martes' => array('IAW','SAD','SAD'),
        'Miercoles' => array('ASX','EIEA','EIEA'),
        'Jueves' => array('ASX','ASX','EIEA'),
        'Viernes' => array('IAW','SRI','SRI'),
    );
$Numero=isset($_REQUEST['numerosem']);
if ($Numero > 5) {
    echo "El numero tiene que ser entre 1 y 5";    
}else{
    $cont = 1;
    foreach ($Semana as $Dia => $horario_dia) {
        if($cont == $Numero){
            echo $horario_dia[1][$Dia];
        }
        $cont++;
        
    }
        
}
echo '</form>
</body>
</html>';
?>