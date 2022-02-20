<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 18</h2>
        <h3>Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
negativo. Se permiten números de hasta 5 dígitos.</h3>
    </head>
    <body>
    <form action="ejercicio_18.php" enctype='multipart/form-data' method='post'>
        <p>Numero: <input type='number' name='numero' /></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    </body>
    <?php
        $Numero=$_REQUEST["numero"];
    if(strlen($Numero) > 5){
     echo "Tiene que ser de 5 cifras";
    }else{
    echo strlen($Numero);
    }
    ?>
</html>