<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 3</h2>
        <h3>Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
        de la semana</h3>
        </head>
    <body>
    <form action='ejercicio_03.php' enctype='multipart/form-data' method='post'>
        <p>Dime un dia de la semana: <input type='number' name='hora'/></p>
        <p><input type='submit' value='Submit'/></p>
    </body>
</hml>";
$Numero=isset($_REQUEST['hora'])?$_REQUEST['hora']:" ";
$Dia=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
if($Numero > 7 || $Numero < 0){
    echo "Dime un numero valido, entre 1 y 7";
}else{
    for ($i=0; $i < 7; $i++) { 
        if($Numero == $i){
            echo $Dia[$i-1];
        }
    }
}




?>
