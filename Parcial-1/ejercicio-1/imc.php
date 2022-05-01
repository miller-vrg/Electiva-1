<!DOCTYPE html>
<html>
        <body>
        <?php
            $resultado = $_POST["peso"] / ($_POST["altura"]*$_POST["altura"]);
            $mensaje;
            $img = "img/bien.gif";

            if( $resultado < 18.5 ){
                $mensaje = "<br><p>Debe de ir al metico por falta de peso</p>";
                $img= "img/flaco.gif";
            }else if( $resultado >= 18.5 && $resultado <= 24.9 ){
                $mensaje = "<br><p>Usted esta bien de peso</p>";
                $img = "img/bien.gif";
            }else if( $resultado >= 25.0 && $resultado <= 30.0 ){
                $mensaje = "<br><p>Debe de bajar de peso</p>";
                $img = "img/gordo.gif";
            }else if( $resultado > 30.0 ){
                $mensaje = "<br><p>Debe de ir al medico por sobre peso</p>";
                $img = "img/sobre.gif";
            }

            ?>
            <center>
                <form action="imc.php" method="post">
                    <fieldset style="width: 40%; text-align: left">
                        <legend>Dijite los datos</legend>
                        <table>
                        <tr>
                        <th>Altura:</th>
                        <td><input type="number" name="altura" step="any" required></td>
                        </tr> 
                        <tr>
                            <th>Peso:</th>
                            <td><input type="number" name="peso" step="any" required></td>
                        </tr> 
                        <tr><td colspan="2"><hr></tr>
                        <tr>
                            
                            <th><input type="submit"></th>
                            <td><input type="reset"></td>
                        </tr>
                        </table>
                    </fieldset>
                </form>

              <p><?php echo $mensaje; ?></p>
                <img src="<?php echo $img;?>" width="150px" height="150px">
               
            </center>     
</body>
</html>