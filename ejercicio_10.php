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
#$FechaNueva=date("d-m-Y",strtotime($Fecha));
$Fecha=mktime(0,0,0,intval($Mes),intval($Dia));
$CalendarioHoroscopo=array(
    mktime(0,0,0,1,20) => 'Capricornio',
    mktime(0,0,0,2,19) => 'Acuario',
    mktime(0,0,0,3,21) => 'Piscis',
    mktime(0,0,0,4,20) => 'Aries',
    mktime(0,0,0,5,22) => 'Tauro',
    mktime(0,0,0,6,22) => 'Geminis',
    mktime(0,0,0,7,23) => 'Cancer',
    mktime(0,0,0,8,24) => 'Leo',
    mktime(0,0,0,9,23) => 'Virgo',
    mktime(0,0,0,10,23) => 'Libra',
    mktime(0,0,0,11,21) => 'Escorpio',
    mktime(0,0,0,12,22) => 'Sagitario',
);
$Horoscopo = "";
foreach ($CalendarioHoroscopo as $FechaZo => $Zodiaco) {
    if($Fecha < $FechaZo && $Horoscopo == ""){
        $Horoscopo=$Zodiaco;
    }
}
echo "Eres $Horoscopo"
?>