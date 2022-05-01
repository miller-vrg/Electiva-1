<?php
session_start();

function llenarPractica(){

    $conexion = mysqli_connect("localhost", "root", "","registro_examen");

    $tipo = $_SESSION['tipo'];
    $user = $_SESSION['user'];
    
    $sql = "SELECT * FROM datos WHERE creaciones_id = 1;";

    $resul = mysqli_query($conexion, $sql);
    if(mysqli_num_rows($resul) > 0){

        $con = 1;
        $respuestas;
        $contenido;

        while($data = mysqli_fetch_assoc($resul)){

            $pregunta = $data["pregunta"];
            $op_a = $data["op_a"];
            $op_b = $data["op_b"];
            $op_c = $data["op_c"];
            $r = $data["respuesta"];

            $t ="
            <tr>
                <th colspan ='5'> $pregunta </th>
            </tr>
            
            <tr>
                <td><input type='radio' name='opcion$con' value='$op_a'></td>
                <td colspan ='4'>$op_a</td>
            </tr>
            <tr>
                <td> <input type='radio' name='opcion$con' value='$op_b'></td>
                <td colspan ='4'>$op_b</td>
            </tr>
            
            <tr>
                <td><input type='radio' name='opcion$con' value='$op_c'></td>
                <td colspan ='4'>$op_c</td>
            </tr>
            <tr><td colspan='5'><hr></td></tr>
            ";
            $con++;
            echo $t;
        }
    
    }
    }

function llenarExamen(){

        $conexion = mysqli_connect("localhost", "root", "","registro_examen");
        
        $sql = "SELECT * FROM datos WHERE creaciones_id = 2;";
    
        $resul = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($resul) > 0){
    
            $con = 1;
            $respuestas;
            $contenido;
    
            while($data = mysqli_fetch_assoc($resul)){
    
                $pregunta = $data["pregunta"];
                $op_a = $data["op_a"];
                $op_b = $data["op_b"];
                $op_c = $data["op_c"];
                $r = $data["respuesta"];
    
                $t ="
                <tr>
                    <th colspan ='5'> $pregunta </th>
                </tr>
                
                <tr>
                    <td><input type='radio' name='opcion$con' value='$op_a'></td>
                    <td colspan ='4'>$op_a</td>
                </tr>
                <tr>
                    <td> <input type='radio' name='opcion$con' value='$op_b'></td>
                    <td colspan ='4'>$op_b</td>
                </tr>
                
                <tr>
                    <td><input type='radio' name='opcion$con' value='$op_c'></td>
                    <td colspan ='4'>$op_c</td>
                </tr>
                <tr><td colspan='5'><hr></td></tr>
                ";
                $con++;
                echo $t;
            }
        
        }
        }
function llenarNotas(){
    $conexion = mysqli_connect("localhost", "root", "","registro_examen");
    $tipo = $_SESSION['tipo'];
    $user = $_SESSION['user'];

    $sql = "SELECT ";

    $resul = mysqli_query($conexion, $sql);

}

