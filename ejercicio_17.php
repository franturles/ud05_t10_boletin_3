<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 17</h2>
        <h3>Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado.
Se permiten números de hasta 5 cifras.</h3>
    </head>
    <body>
    <form action="ejercicio_17.php" enctype='multipart/form-data' method='post'>
        <p>Numero: <input type='number' name='numero' min='0'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    </body>
    <?php
    $Numero=$_REQUEST["numero"];
    if(strlen($Numero) > 5){
        echo "Tiene que ser de 5 cifras";
    }else{
        $Numero=substr($_REQUEST["numero"],0,1);
        echo $Numero;
    }
    ?>
</html>