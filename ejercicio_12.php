<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 12</h2>
        <h3>Realiza un minicuestionario con 10 preguntas tipo test. El programa mostrará al final la calificación
    obtenida.</h3>
    </head>
    <body>
        <form action="ejercicio_12.php" enctype='multipart/form-data' method='post'>
        <label>Pregunta 1: ¿Como se llama la novia de el protagonista de SAO?</label><br />
            <input type="radio" name="preg1" value="asuka"/> Asuka<br />
            <input type="radio" name="preg1" value="asuna"/> Asuna<br />
</br>
        <label>Pregunta 2: ¿Como se llama el sistema de poder de HxH?</label><br />
            <input type="radio" name="preg2" value="haki"/> Haki<br />
            <input type="radio" name="preg2" value="nem"/> Nem<br />
</br>
        <label>Pregunta 3: ¿Como se llama el protagonista de SNK?</label><br />
            <input type="radio" name="preg3" value="krugger"/> Eren Krugger<br />
            <input type="radio" name="preg3" value="jaeger"/> Eren Jaeger<br />
</br>
        <label>Pregunta 4: ¿Como se llama el maestro de Mob?</label><br />
            <input type="radio" name="preg4" value="reigen"/>Reigen Arataka<br />
            <input type="radio" name="preg4" value="rikuto"/>Rikuto Akihiro<br/>
</br>
        <label>Pregunta 5: ¿Como se llama las espadas en Bleach?</label><br />
            <input type="radio" name="preg5" value="kuto"/> Zanpakuto<br />
            <input type="radio" name="preg5" value="poko"/> Zurunkuto<br />
</br>
        <label>Pregunta 6: ¿Cuantos dioses de la destruccion participan en el Torneo del Poder?</label><br />
            <input type="radio" name="preg6" value="8"/>8<br />
            <input type="radio" name="preg6" value="12"/>9<br />
</br>
        <label>Pregunta 7: ¿De que tipo es la fruta de Luffy?</label><br />
            <input type="radio" name="preg7" value="logia"/> Logia<br />
            <input type="radio" name="preg7" value="paramecia"/> Paramecia<br />
</br>
        <label>Pregunta 8: ¿Cuantas murallas hay en SNK?</label><br />
            <input type="radio" name="preg8" value="6"/>6<br />
            <input type="radio" name="preg8" value="3"/>3<br />
</br>
        <label>Pregunta 9: ¿Como se llaman la habilidad de ojos que tienen los Uchihas?</label><br />
            <input type="radio" name="preg9" value="sha"/>Sharingan <br />
            <input type="radio" name="preg9" value="rin"/>Rinnegan <br /> 
</br>
        <label>Pregunta 10: ¿Como se llama el pilar de los insecto?</label><br />
            <input type="radio" name="preg10" value="ka"/> Kanao<br />
            <input type="radio" name="preg10" value="shi"/> Shinobu<br />   
</br>
           <p><input type='submit' value='Submit'/></p>
        </form>
    </body>
<?php
$Nota="";
$Pregunta1=$_REQUEST["preg1"];
if($Pregunta1 == "asuna"){
    $Nota=$Nota+1;
}
$Pregunta2=$_REQUEST["preg2"];
if($Pregunta2 == "nem"){
    $Nota=$Nota+1;
}

$Pregunta3=$_REQUEST["preg3"];
if($Pregunta3 == "jaegar"){
    $Nota=$Nota+1;
}

$Pregunta4=$_REQUEST["preg4"];
if($Pregunta4 == "reigen"){
    $Nota=$Nota+1;
}

$Pregunta5=$_REQUEST["preg5"];

if($Pregunta5 == "kuto"){
    $Nota=$Nota+1;
}

$Pregunta6=$_REQUEST["preg6"];
if($Pregunta6 == "8"){
    $Nota=$Nota+1;
}

$Pregunta7=$_REQUEST["preg7"];
if($Pregunta7 == "paramecia"){
    $Nota=$Nota+1;
}

$Pregunta8=$_REQUEST["preg8"];
if($Pregunta8 == "3"){
    $Nota=$Nota+1;
}

$Pregunta9=$_REQUEST["preg9"];
if($Pregunta9 == "sha"){
    $Nota=$Nota+1;
}

$Pregunta10=$_REQUEST["preg10"];
if($Pregunta10 == "shi"){
    $Nota=$Nota+1;
}
if($Nota ==" "){
    $Nota=0;
    echo "Tu nota es $Nota";
}else{
    echo "Tu nota es $Nota";
}

?>