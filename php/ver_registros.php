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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver quinielas ingresadas</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/estilos_interno.css">
</head>
<body>

<header>
    <nav>
        <ul class="nav__link">
            <li>Bienvenido <?php echo $_SESSION['usuario'];?></li>
            <li><a href="../php/panel.php">Panel principal</a></li>   
        </ul>
    </nav>
    <button><a href="../php/cerrar_sesion.php">Cerrar sesión</a></button>
</header>




<body>
    
<p>Aqui se verán las tablas de las quinielas registradas</p>

<div id="Tablas" class="contenedor">
    <table id="datos_tabla">
        <tr>
            <td>ID Quiniela</td>
            <td>Usuario</td>
            <td>Código</td>
            <td>Descargar Quiniela</td>
        </tr>

        <?php
        include '../php/conexion_bd.php';
        $usuario_actual = $_SESSION['usuario'];

        $query = "select*from tbl_quinielas WHERE quiniela_usuario='".$usuario_actual."' ORDER BY id_quiniela DESC";
        $ejecutar = mysqli_query($conexion, $query);
        while($row=mysqli_fetch_assoc($ejecutar)){?>

        <tr>
            <td><?php echo $row['id_quiniela']; ?></td>
            <td><?php echo $row['quiniela_usuario']; ?></td>
            <td><?php echo $row['quiniela_codigo']; ?></td>
            <td><a href="ver_quiniela.php?id=<?php echo $row['id_quiniela']; ?>"></a></td>
        </tr>

        <?php } ?>

    </table>
</div>



</body>
</html>