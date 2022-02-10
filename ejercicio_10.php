<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T08_Verificar_datos_Formulario</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 10</h2>
        <h3>Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.</h3>
        </head>
    <body>
    <form action='ejercicio_10.php' enctype='multipart/form-data' method='post'>
    <p>Dia del mes:<input type='number' name='Dia'/></p>
    <label>Mes:</label>
    <select name='Mes'>
        <option value='Enero'>Enero</option>
        <option value='Febrero'>Febrero</option>
        <option value='Marzo'>Marzo</option>
        <option value='Abril'>Abril</option>
        <option value='Mayo'>Mayo</option>
        <option value='Junio'>Junio</option>
        <option value='Julio'>Julio</option>
        <option value='Agosto'>Agosto</option>
        <option value='Septiembre'>Septiembre</option>
        <option value='Octubre'>Octubre</option>
        <option value='Noviembre'>Noviembre</option>
        <option value='Diciembre'>Diciembre</option>
    </select>
    <p><input type='submit' value='Submit'/></p>";
$Dia=$_REQUEST["Dia"];
$Mes=$_REQUEST["Mes"];
echo $Dia;
echo $Mes;
?>