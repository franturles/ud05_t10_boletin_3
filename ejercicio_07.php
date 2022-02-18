<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 7</h2>
        <h3>Realiza un programa que calcule la media de tres notas.</h3>
        </head>
    <body>
    <form action='ejercicio_07.php' enctype='multipart/form-data' method='post'>
        <p>Nota 1: <input type='number' name='nota1'/></p>
        <p>Nota 2: <input type='number' name='nota2'/></p>
        <p>Nota 3: <input type='number' name='nota3'/></p>
        <p><input type='submit' value='Submit'/></p>
    </body>
</hml>";
$Nota1=$_POST['nota1'];
$Nota2=$_POST['nota2'];
$Nota3=$_POST['nota3'];
$Resultado=($Nota1+$Nota2+$Nota3)/3;
echo $Resultado;
?>