<html>

<body>
<?php 
$ganaste = "estrella.png";
$casi = "casi.gif";
$perdiste = "perdiste.gif";
$notas = ($_POST["nota1"] * 0.35 + $_POST["nota2"] * 0.35 + $_POST["nota3"] * 0.30);
$mensaje;
$img;

if( $notas >= 4 ){
$mensaje = "Ganaste sos un animal!!! con $notas";
$img = "ganaste.gif";
}else if( $notas >= 3 & $notas < 4 ){
$mensaje = "Casi no la cuentas con $notas";
$img = "casi.gif";
}else{
$mensaje = "Perdiste flojo con $notas" ;
$img = "perdiste.gif";
}

?>

<center>
<h1 style="color: red"> <b> .:: Calculadora de notas ::.  </b> </h1>
        <form action="definitiva.php" method="post">
            <fieldset style="width: 25%; text-align: left">
            Corte 1:  <input type="number" name="nota1" min="0" max="5" step="any" required><br>
            Corte 2: <input type="number" name="nota2" min="0" max="5" step="any" required><br>
            Corte 3:  <input type="number" name="nota3" min="0" max="5" step="any" required> <br><hr>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Calcular">
            </fieldset>
        </form>

        <p><?php echo $mensaje?></p>
        <img src="<?php echo $img; ?>" height="256" width="256">
       
    </center>

</body>
</html> 