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
    <title>Panel principal</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/estilos_interno.css">
</head>
<body>

    <header>
        <nav>
            <ul class="nav__link">
                <li>Bienvenido <?php echo $_SESSION['usuario']; $usuario_actual = $_SESSION['usuario'];?></li>
                <li><a href="panel.php">Panel principal</a></li>
                <?php if($usuario_actual === 'ADMINISTRADOR'){
                    echo 
                        '<li><a href="actualizar_puntos.php">Actualizar tabla general</a></li>';
                    } else{ }?> 
            </ul>
        </nav>
        <button><a href="../php/cerrar_sesion.php">Cerrar sesión</a></button>
    </header>


<div class="container__cards">
    <div class="card">
        <div class="cover">
            <img src="../img/p1.png" alt="">
            <div class="img__back"></div>
        </div>
        <div class="description">
            <h2>Registrar quiniela</h2>
            <p>Registra las quinielas que quieras, si aciertas resultado te llevas un punto, si aciertas marcador te dan un punto adicional</p>
            <input type="button" value="Registrar una quiniela" onClick="location.href='../php/llenar_quiniela.php'">
        </div>
    </div>

    <div class="card">
        <div class="cover">
            <img src="../img/p2.png" alt="">
            <div class="img__back"></div>
        </div>
        <div class="description">
            <h2>Ver mis quinielas</h2>
            <p>Revisa todas las quinielas que has registrado, descárgalas e imprímelas</p>
            <input type="button" value="Revisar quinielas completas" onClick="location.href='../php/ver_registros.php'">
        </div>
    </div>

    <div class="card">
        <div class="cover">
            <img src="../img/p3.png" alt="">
            <div class="img__back"></div>
        </div>
        <div class="description">
            <h2>Ver tabla de resultados</h2>
            <p>Aqui puedes saber tu cantidad de aciertos y ver como van otros usuarios </p>
            <input type="button" value="Revisar posiciones y aciertos" onClick="location.href='../php/tabla_general.php'">
        </div>
    </div>
</div>

</body>
</html>