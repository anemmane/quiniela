<?php

session_start();

include '../php/conexion_bd.php';

$correo = $_POST['correo'];
$password_contra = $_POST['password'];
$password_contra = hash('sha512', $password_contra);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and password_contra='$password_contra'");

if(!$validar_login || mysqli_num_rows($validar_login) > 0){
    header("location: ../php/panel.php");
    $_SESSION['usuario'] = $correo;
    exit();
}else{
    echo
    '
    <script>
    alert("El usuario no existe, intentar de nuevo");
    window.location = "../index.php";    
    </script>
    ';
    exit();
}

?>