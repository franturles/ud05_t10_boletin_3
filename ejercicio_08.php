<?php
echo "<!DOCTYPE html>
<html>
    <head>
        <title>UD05_T08_Verificar_datos_Formulario</title>
        <meta charset='UTF-8'>    
        <h1>UD05_T10</h1>
        <h2>Ejercicio 7</h2>
        <h3>Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable
        o sobresaliente).</h3>
        </head>
    <body>
    <form action='ejercicio_08.php' enctype='multipart/form-data' method='post'>
        <p>Nota 1: <input type='number' name='nota1'/></p>
        <p>Nota 2: <input type='number' name='nota2'/></p>
        <p>Nota 3: <input type='number' name='nota3'/></p>
        <p><input type='submit' value='Submit'/></p>
    </body>
</hml>";
$Nota1=$_POST['nota1'];
$Nota2=$_POST['nota2'];
$Nota3=$_POST['nota3'];
$Resultado=round(($Nota1+$Nota2+$Nota3)/3);
$Resultado2=array('Insuficiente','Suficiente','Notable','Bien','Sobresaliente');
if ($Resultado < 5){
echo "Tu nota $Resultado es un $Resultado2[0]";
}elseif($Resultado >= 5 && $Resultado < 6){
    echo "Tu nota $Resultado es un $Resultado2[1]";
}elseif($Resultado >= 7 && $Resultado < 8){
    echo "Tu nota $Resultado es un $Resultado2[2]";
}elseif($Resultado >= 8 && $Resultado < 9){
    echo "Tu nota $Resultado es un $Resultado2[3]";
}else{
    echo "Tu nota $Resultado es un $Resultado2[4]";
}
?>