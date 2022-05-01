<?php

require_once "../modelo/Gasto.php";
require_once "../modelo/Usuario.php";

$u = new Usuario();
//$u -> cedula = "1";
//$u -> nombre = "me vale verga";
//$u -> email = "me_vale verga @gmail.com";
//$u -> clave = "Me vale verga";

//$u -> save();

$g = new Gasto();
/*
$g -> nombre ="Toxico del Mono";
$g -> fecha = "2003-04-12";
$g -> valor = 3700;
$g -> descripcion = "para todo";
$g -> usuario_id ="1";
 

$g->save();


$u= Usuario::find("1");
echo "Nombre: ".$u->nombre."<br>";
echo "Gasto: $".$u->gastos[0]->valor."<br>";
*/


/// cantidad de usuarios
@$total = Usuario::count();
echo "<br>Total usuario : ".$total."<br>";

@$tota = Gasto::count();
echo "Total gastos : ".$tota;


for($i =0; $i<$tota; $i++){
    $g = Gasto::find($i+1);
    echo "<br>$".$g->valor." de ".$g->usuario->nombre;


}