<?php

include 'conexion_bd.php';

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password_contra = $_POST['password'];
$password_contra = hash('sha512', $password_contra);

//VERIFICANDO QUE EL CORREO NO SE REPITA EN LA BD

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert ("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../index.php"
        </script>
        ';
        exit();
}

$verificar_usuario = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0) {
    echo '
            alert ("Este usuario ya está registrado, intenta con otro diferente");
            window.location = "../index.php"
        </script>
        ';
        exit();
}

$query = "INSERT INTO usuarios(usuario, correo, password_contra)
          VALUES ('$usuario', '$correo', '$password_contra')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Registro correcto, ya puede inicar sesión");
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