<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 19</h2>
        <h3>Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se
permiten números de hasta 5 cifras.</h3>
    </head>
    <body>
    <form action="ejercicio_19.php" enctype='multipart/form-data' method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    </body>
<?php
        $Numero=$_REQUEST["numero"];
if(strlen($Numero) < 5){
    if(substr($Numero,0,1) == substr($Numero,-1)){
        echo "Es capicua";
    }else{
        echo "No es capicua";
    }
}else{
    echo "Tiene que ser de 5 cifras";
}
?>
</html>