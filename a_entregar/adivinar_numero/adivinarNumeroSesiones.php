<?php
//Ejercicio basado en el del MINDMAP, CON SESIONES.

session_start();
//comprueba que haya sesion con la variable acumulado.
$haySesionIniciada = isset($_SESSION);


//controla si tiene un valor asignado, si no lo tiene lo pone a 0
if ($quierenResetear || !$haySesionIniciada) {
    $numeroVariable = random_int(0,20);
} else {
    $numeroVariable = $_SESSION["numeroVariable"];
    $numero = $_REQUEST["numero"];
}

$_SESSION["numeroVariable"]=$numeroVariable;

function acierto(){
    if ($_REQUEST["numero"]==$_SESSION["numeroVariable"]) {
        echo "<h4> Has acertao. </h4>";
    } else {
        echo "<h4> No has acertado. Vuelve a intentarlo. </h4>";
    }
    
}

function mostrarNumeroAleatorio(){
    echo "<h3>". $_SESSION["numeroVariable"] ."</h3>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--AQUI EL ERROR QUE TUVE FUE EL NO PONER NOMBRE, SIN EL NOMBRE EL GET NO RECOGE EL PARAMETRO (IMAGINO QUE POST TAMPOCO)-->
    <form method="get">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="enviar" name="Enviar">
    </form>
    
    <H4><?=mostrarNumeroAleatorio() ?></H4>
    <p><?=acierto()?></p>
</body>

</html>