<?php
session_start();
$neto = ($_POST["cantidad"] * ($_POST["precio"] + (($_POST["iva"]/100) * $_POST["precio"])));
@$_SESSION["cuenta"] ;
$_SESSION["factura"];
if ( $neto > 0){
$_SESSION["cuenta"] = @$_SESSION["cuenta"] + 1;
$_SESSION["factura"] =@$_SESSION["factura"]."<tr>
                      <th> "  .$_SESSION["cuenta"]." </td>
                      <td> "  .$_POST["producto"]." </td>
                      <td> "  .@$_POST["cantidad"]."</td>
                      <td> $ ".@$_POST["precio"] ."</td>
                      <td> $ ".$neto."</td>
                      </tr>";

}


$_SESSION["total"] = @$_SESSION["total"]+ $neto;

?>
<!DOCTYPE html>
<head>
    </head>
    <body>

        <center>
            <form action="proceso.php" method="POST">
                <fieldset style="width:30%; text-align: left">
                    <table>
                <tr>
                    <th>Producto: </th>
                    <td> <input type="text" name="producto" placeholder="Nombre del producto" required></td>
                </tr>
                <tr>
                    <th>Cantidad: </th>
                    <td> <input type="number"  name="cantidad" min="0" placeholder="1...." required></td>
                </tr>
                <tr>
                    <th> Precio: </th>
                    <td> <input type="number" name="precio" step="any" min="50" placeholder="$..." required></td>
                </tr>
                <tr>
                    <th>Iva: %</th>
                    <td> <input type="number" name="iva" step="any" min="1" placeholder="%" style="width: 28%;" required></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td> <input type="submit"> </td>
                    <td> <input type="reset"> </td>
                </tr>
            </table>
                </fieldset>
            </form>
            <form>
                <legend> factura </legend>
                <fieldset style="width:40%; text-align: left">
                <table style="width:100%;">
                    <tr>
                        <th scope="row" style="width:50px;"> N° </th>
                        <th> Producto </th>
                        <th> Cantidad </th>
                        <th> Precio </th>
                        <th> Neto </th>
                    </tr>
                    <?= $_SESSION["factura"];?>
                    <tr><td colspan="5"><hr></td></tr>
                    <tr>
                        <th colspan="2"> Total a pagar: </th>
                        <td colspan="3"> $ <?= $_SESSION["total"]; ?> </td>
                    </tr>
                </table>
            </fieldset>
            </form>
        </center>

    </body>
</html>