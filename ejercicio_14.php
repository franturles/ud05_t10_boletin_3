<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 14</h2>
        <h3>Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.</h3>
    </head>
    <body>
    <form action="ejercicio_14.php" enctype='multipart/form-data' method='post'>
        <p>Numero<input type='number' name='numero' min='0'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    $Numero=$_REQUEST["numero"];
    if(($Numero % 2) == 0){
        echo "$Numero es par";
    }else{
        echo "$Numero es impar";
    }
    if (($Numero % 5) == 0) {
        echo "$Numero es divisible entre 5";
    } 
    
    ?>
    </body>
</html>