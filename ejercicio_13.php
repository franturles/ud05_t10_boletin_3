<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 13</h2>
        <h3>Escribe un programa que ordene tres números enteros introducidos por teclado.</h3>
    </head>
    <body>
    <form action="ejercicio_13.php" enctype='multipart/form-data' method='post'>
        <label>Dime 3 numeros y te los ordenare</label>
            <p>Numero 1: <input type='number' name='n1' min='0'/></p>
            <p>Numero 2: <input type='number' name='n2' min='0'/></p>
            <p>Numero 3: <input type='number' name='n3' min='0'/></p>
            <p><input type='submit' value='Submit'/></p>
    </form>
    </body>
    <?php
    $N1=$_REQUEST["n1"];
    $N2=$_REQUEST["n2"];
    $N3=$_REQUEST["n3"];
    $Numeros= [$N1,$N2,$N3];
    $Ordenado = sort($Numeros, SORT_NUMERIC);
    echo "$Numeros[0] $Numeros[1] $Numeros[2]";
    ?>
</html>