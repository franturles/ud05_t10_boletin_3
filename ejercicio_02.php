<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 2</h2>
        <h3>Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
        tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
        respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.</h3>
    </head>
    <body>
    <form action='ejercicio_02.php' enctype='multipart/form-data' method='post'>
        <p>Dime una hora: <input type='number' name='hora'/></p>
        <p><input type='submit' value='Submit'/></p>
    </body>
</hml>";
$Horas=array("Buenos Dias","Buenas Tardes","Buenas Noches");
$Numero=isset($_REQUEST['hora'])?$_REQUEST['hora']:" ";
if ($Numero > 24 && $Numero < 0) {
    echo "Dime un rango de hora coherente";
}else{
if($Numero >= 6 && $Numero <= 12){
    echo "Buenos Dias";
} elseif ($Numero >= 13 && $Numero <= 20){
    echo "Buenas Tardes";  
} else{
    echo "Buenas Noches";
}
}
?>