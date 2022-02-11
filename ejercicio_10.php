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
        <option value='01'>Enero</option>
        <option value='02'>Febrero</option>
        <option value='03'>Marzo</option>
        <option value='04'>Abril</option>
        <option value='05'>Mayo</option>
        <option value='06'>Junio</option>
        <option value='07'>Julio</option>
        <option value='08'>Agosto</option>
        <option value='09'>Septiembre</option>
        <option value='10'>Octubre</option>
        <option value='11'>Noviembre</option>
        <option value='12'>Diciembre</option>
    </select>
    <p><input type='submit' value='Submit'/></p>";
$Dia=$_REQUEST["Dia"];
$Mes=$_REQUEST["Mes"];
$Año= date("Y");
$Fecha=("$Dia-$Mes-$Año");
#$FechaNueva=date("m-%B-Y",strtotime($Fecha));
$FechaNueva=strftime("%d-%B-%Y",strtotime($Fecha));

?>