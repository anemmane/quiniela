<?php

session_start();

if(!isset($_SESSION['usuario'])){
    $usuario_actual = $_SESSION['usuario'];
    if($usuario_actual != 'ADMINISTRADOR'){
        echo
        '
        <script>
            alert ("Esta sección es solo para el administrador");
            window.location = "../index.php";
        </script>
        ';
        session_destroy();
        die();
    }
    
   
}


include_once '../php/conexion_bd.php';

//Leemos los datos del id

$puntos = $_GET['id'];
$id_quiniela_control = $_GET['idquiniela'];




    //Conexión a la base de datos

    $query = "UPDATE tbl_quinielas SET quiniela_puntos='".$puntos."' WHERE id_quiniela='".$id_quiniela_control."'";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro correcto, ya puede ver su quiniela y descargarla");
                window.location = "../index.php";
            </script>
            ';
    }else{
        echo '
        <script>
            alert("Error. Por favor, intente de nuevo. ");
            window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);


?>