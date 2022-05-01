<?php 
session_start();
require_once "../databases/conexion_db.php";

$user = $_REQUEST['user'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM estudiantes 
WHERE matricula = '$user' 
and password = '$password';";

$rows = mysqli_query($conexion,$sql);

if(mysqli_num_rows($rows) > 0 ){
    $_SESSION['tipo'] = "Alumno";

    while($data = mysqli_fetch_assoc($rows)){

        $_SESSION['user'] = $user;
        echo $data['name']." ".$data['apellidos'];
        $_SESSION['name'] = $data['name']." ".$data['apellidos'];
        }

    header("location: ../pages/home.php");
}else{

    $sql = "SELECT * FROM docentes 
    WHERE id = '$user' 
    and password = '$password';";

    $rows = mysqli_query($conexion,$sql);
        
    if(mysqli_num_rows($rows) > 0 ){
        $_SESSION['tipo'] = "Docente";
        while($data = mysqli_fetch_assoc($rows)){
    
            $_SESSION['user'] = $user;
            echo $data['name']." ".$data['apellidos'];
            $_SESSION['name'] = $data['name']." ".$data['apellidos'];
            }
    
        header("location: ../pages/home.php");
    }else{
             echo "<script>
                 alert('Usuario o contraseña invalido existe');
                 location = '/Electiva-1/examenes/';
              </script>";
    }
}

?>