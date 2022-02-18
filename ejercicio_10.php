<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 10</h2>
        <h3>Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.</h3>
        </head>
    <body>
    <form action='ejercicio_10.php' enctype='multipart/form-data' method='post'>
    <p>Dia del mes:<input type='number' min='1' max='31' name='Dia'/></p>
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
#$FechaNueva=date("d-m-Y",strtotime($Fecha));
$FechaNueva=date("d-m-Y",mktime($Fecha));
$Horoscopo=array(
    '20-01-'.$Año => 'Acuario',
    '19-02-'.$Año => 'Piscis',
    '21-03-'.$Año => 'Aries',
    '20-04-'.$Año => 'Tauro',
    '21-05-'.$Año => 'Geminis',
    '21-06-'.$Año => 'Cancer',
    '23-07-'.$Año => 'Leo',
    '23-08-'.$Año => 'Virgo',
    '23-09-'.$Año => 'Libra',
    '23-10-'.$Año => 'Escorpio',
    '22-11-'.$Año => 'Sagitario',
    '22-12-'.$Año => 'Capricornio',
);
foreach ($Horoscopo as $FechaZo => $Zodiaco) {
    $FechaZo=date("d-m-Y",mktime($FechaZo));
    if($FechaNueva >= $FechaZo){
        echo $Zodiaco;
    }
}

?>