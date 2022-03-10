<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        @$control = 0;
        
        function llenar_tabla(){

            do{
                $control ++;
                $fecha_cuotas = date("d-m-Y",strtotime($fecha."+ $control month"));
                $valor_sin = $_POST["valor"] / $_POST["cuotas"];
                $interes_cuota = ($valor_sin * ($_POST["interes"] / 100));
                $valor_con = $valor_sin + $interes_cuota;

                echo "<tr>
                        <th> $control </th>
                        <td> $fecha_cuotas </td>
                        <td>$ $valor_sin </td>
                        <td>$ $interes_cuota</td>
                        <td>$ $valor_con </td>
                     </tr>";
                    
                  }while( $control < $_POST["cuotas"]);
        }

        ?>
        <center>
            <form action="creditos.php" method="post">
                <legend><b>Ingrese los datos requeridos</b></legend>
                    <fieldset style="width:40%; text-align: left">
                        <table>
                    <tr>
                        <th>Cantidad de cuotas: </th> <td> <input type="number" name="cuotas" min="1" placeholder="numeros" required></td>
                    </tr><br>
                    <tr>
                    <th>Valor del credito: </th> <td><input type="number" name="valor" step="any" min="10000" placeholder="$ valor" required></td>
                    </tr>
                    <tr>
                        <th>Integeres: </th> <td><input type="number" name="interes" step="any" placeholder="Valor numerico" required></td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr><th><input type="submit"> <td><input type="reset"></td></th></tr>
                </table>
                    </fieldset>
            </form>
            <form>
                <legend>Cuotas mensuales</legend>
                    <table border="1" style="width:60%">
                        <tr>
                            <th scope="row"> <b> N° </b></th>
                            <th><b> Fecha </b></th>
                            <th><b> Valor neto</b></th>
                            <th><b> interes </b></th>
                            <th><b> Valor a pagar </b></th>
                        </tr> 
                        <?php llenar_tabla();?>
                    </table>
            </form>
        </center>
    </body>
</html>