<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial -2</title>
</head>
<body>
<?php

    require_once "../metodos/Metodos.php";

    $id = $_REQUEST['placa'];
    $marca =  $_REQUEST['marca'];
    $modelo = $_REQUEST['modelo'];
    $version = $_REQUEST['vers'];
    $color = $_REQUEST['color'];
    $puestos = $_REQUEST['puesto'];
    $puertas = "".$_REQUEST['puertas'];
    $combustible = $_REQUEST['combustible'];
    $kilometros = "".$_REQUEST['kilometraje'];
    $cilindraje = "".$_REQUEST['cilindraje'];
    $categoria = $_REQUEST['categoria'];
    ?>
    <center>
        <div class="conatiner-interno">
            <form action="parci.php" method="post">
                
                <table>
                    <tr>
                        <td>Placa: </td> <th colspan="4"><input type="text" name="placa"></th>
                    </tr>
                    <tr>
                        <td>Marca: </td> <th colspan="4"><input type="text" name="marca"></th>
                    </tr>
                    <tr>
                        <td>Modelo: </td> <th colspan="4"><input type="text" name="modelo"></th>
                    </tr>
                    <tr>
                        <td>versión: </td> <th colspan="4"><input type="text" name="vers"></th>
                    </tr>
                    <tr>
                        <td>Color: </td> <th colspan="4"><input type="text" name="color" ></th>
                    </tr>
                    <tr>
                        <td>Puestos: </td> <th colspan="4"><input type="number" min="2" name="puesto"></th>
                    </tr>
                    <tr>
                        <td>Puertas: </td> <th colspan="4"><input type="number" min="2" name="puertas" ></th>
                    </tr>
                    <tr>
                        <td>Combustible: </td> <th colspan="4"><input type="text" name="combustible" ></th>
                    </tr>
                    <tr>
                        <td>Kilometros: </td> <th colspan="4"><input type="number" min ="0" name="kilometraje" ></th>
                    </tr>
                    <tr>
                        <td>Cilindraje: </td> <th colspan="4"><input type="number" name="cilindraje" ></th>
                    </tr>
                    <tr>
                        <td>Categoria: </td> <th colspan="4"><input type="text" name="categoria" ></th>
                    </tr>
                    <tr> <td colspan="5"><hr></tr>
                    <tr>
                        <td><input type="submit"></td>
                        <td><input type="reset" value="limpiar"></td>                        </tr>
                </table>
            </form>
            <form>
                <table id="resul">
                    <?php
                    guardar(
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
                        $categoria);
                    ?>
                </table>
            </form>
        </div>
    </center>
    <script src="../js/config.js"></script>
</body>
</html>