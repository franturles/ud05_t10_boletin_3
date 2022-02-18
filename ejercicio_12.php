<html>
    <head>
    <title>UD05_T10_boletin_3</title>
        <meta charset='UTF-8'>
        <h1>UD05_T10</h1>
        <h2>Ejercicio 12</h2>
        <h3>Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
    el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
    obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
    de conocimientos en las diferentes asignaturas del curso.</h3>
    </head>
    <body>
        <form action="ejercicio_12.php" enctype='multipart/form-data' method='post'>
        <label>Pregunta 1: ¿Como se llama el protagonista de SAO?</label><br />
            <input type="radio" name="preg1" value="kirito"/> Kirito<br />
            <input type="radio" name="preg1" value="mirio"/> Mirio<br />
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
        <label>Pregunta 5: ¿Como se llama las espadas de Bleach?</label><br />
            <input type="radio" name="preg5" value="kuto"/> Zanpakuto<br />
            <input type="radio" name="preg5" value="polo"/> Zurunpoko<br />
</br>
        <label>Pregunta 6: ¿Cuantos dioses de la destruccion participan en el Torneo del Poder?</label><br />
            <input type="radio" name="preg6" value="8"/>8<br />
            <input type="radio" name="preg6" value="12"/>12<br />
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
            <input type="radio" name="preg9" value="1"/>Sharingan <br />
            <input type="radio" name="preg9" value="2"/>Rinnegan <br /> 
</br>
        <label>Pregunta 10: ¿Como se llama el protagonista de SAO?</label><br />
            <input type="radio" name="preg10" value="1"/> Kirito<br />
            <input type="radio" name="preg10" value="2"/> Mirio<br />   
</br>
           <p><input type='submit' value='Submit'/></p>
        </form>
    </body>