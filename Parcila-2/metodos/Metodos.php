<?php

    require_once "../modelo/Vehiculos.php";
    
    function guardar(
        $id,
        $marca,
        $modelo,
        $version,
        $color,
        $puestos,
        $puertas,
        $combustible,
        $kilometros,
        $cilindraje,
        $categoria){
           
       $v = new vehiculos();
       $v -> id = $id;
       $v -> marca = $marca;
       $v -> modelo = $modelo;
       $v -> version = $version;
       $v -> color = $color;
       $v -> puestos = $puestos;
       $v -> puertas = $puertas;
       $v -> combustible = $combustible;
       $v -> kilometros = $kilometraje;
       $v -> cilindraje = $cilindraje;
       $v -> categoria = $marcacategoria;
       $v -> save();
       echo "Guardado exitoso";

       $v -> save();

    }


    function buscar($id){

        $v= Vehiculos::find($id);
       
        echo "
        <tr>
            <td>Placa: </td><th>".$v->id."</th>
        </tr>
        ";
    }

    ?>