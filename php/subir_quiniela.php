<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo
    '
    <script>
        alert ("Esta sección es solo para usuarios registrados");
        window.location = "../index.php";
    </script>
    ';
    session_destroy();
    die();
}

include_once '../php/conexion_bd.php';

//Leemos los datos del formulario

if (isset($_POST['btn-submit'])){

    $quiniela_usuario = $_SESSION['usuario'];

    $idUnico = time();
    $quiniela_codigo = $idUnico . "user" . $quiniela_usuario;

    $quiniela_p1_a1 = $_POST['p1_a1'];
    $quiniela_p1_a2 = $_POST['p1_a2'];
    $resultado_p1 = $quiniela_p1_a1 - $quiniela_p1_a2;

    if ($resultado_p1 === 0){
        $quiniela_p1 = "E";
    } else if ($resultado_p1 > 0){
        $quiniela_p1 = "L";
    } else if ($resultado_p1 < 0){
        $quiniela_p1 = "V";
    }

    //Conexión a la base de datos

    $query = "INSERT INTO tbl_quinielas(quiniela_usuario, quiniela_codigo, quiniela_p1, quiniela_p1_a1, quiniela_p1_a2)
          VALUES ('$quiniela_usuario', '$quiniela_codigo', '$quiniela_p1', '$quiniela_p1_a1', '$quiniela_p1_a2' )";

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

    
//Si no podemos lleer los datos, mandará un error
} else {
    echo '
    <script>
        alert("Error. Por favor, intente de nuevo. ");
        window.location = "../index.php";
    </script>
    ';
}



?>