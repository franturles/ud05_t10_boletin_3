<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T08_Verificar_datos_Formulario</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 4</h2>
        <h3>Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
        un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
        ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
        pagan a 16 euros la hora.</h3>
        </head>
    <body>
    <form action='ejercicio_04.php' enctype='multipart/form-data' method='post'>
        <p>Horas trabajadas: <input type='number' name='Horas'/></p>
        <p><input type='submit' value='Submit'/></p>
    </body>
</hml>";
$Horas = $_POST['Horas'];
if (is_numeric($Horas)) {
    if ($Horas <= 40) {
        $Resultado = $Horas * 12;
        echo "El Total del salario semanal es $Resultado" ;
    }elseif($Horas > 40){
        $Horas = $Horas-40;
        $Resultado = $Horas * 16+40*12;
        echo "El Total del salario semanal es $Resultado" ;
}
    }
?>