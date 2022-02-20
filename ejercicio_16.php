<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 16</h2>
        <h3>Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.</h3>
    </head>
    <body>
    <form action="ejercicio_16.php" enctype='multipart/form-data' method='post'>
        <p>Numero: <input type='number' name='numero' min='0'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    </body>
    <?php
    $Numero=substr($_REQUEST["numero"],-1);
    echo $Numero;
    ?>
</html>