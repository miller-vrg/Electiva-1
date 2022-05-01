<?php
session_start();
$name = $_SESSION['name'];
$tipo =  $_SESSION['tipo'];
$btn1 = "Crear practicas";
$btn3 = "Crear Examenes";

if( $tipo === "Alumno"){

    $btn1 = "Practicas";
    $btn3 = "Examenes";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: GesPru ::.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-home.css">

</head>
<body>
<div class="container">
<div class="container-interno">

        <div class="encabezado">

            <h1 class="titulo"> Bienvenido </h1>
            <p class="subtitulo"><b><?= $tipo; ?>: </b><?= $name; ?></p>
        </div>
        <div class="caja-botones">
            <button class="botones btn1" name="botones" value="<?= $btn1; ?>" onclick="location = 'contenedor.php'"> 
                    <img src="../img/practica.jpg" alt="Practica"></img>
                    <p class="textTitle"><?= $btn1; ?></p>
                    <p class="textButton">Las pruebas practicas las puedes hacer las veces que deses</p>
            </button>
            <button class="botones btn2" name="accion" value="notas" onclick="location='notas.php'">
                <img src="../img/notas.jpg" alt="notas"> </img>
                <p class="textTitle">calificaciones</p>
                <p class="textButton">Puedes ver tu caliﬁcación aqui cuantas veces deses</p>
            </button>
            <button class="botones btn3" name="accion" value="<?= $btn3; ?>" onclick="location = 'contenedorDocentes.php'">  
                    <img src="../img/examen.jpg" alt="examen"> </img>
                    <p class="textTitle"><?= $btn3; ?></p>
                    <p class="textButton">El examen solo tiene una oportunidad de realización</p>
            </button>
        </div>
</div>
</div>
</body>
</html>