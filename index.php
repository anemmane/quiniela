<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: ../php/panel.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta description="Login"/>
        <meta name="robots" content="index, follow"/>
        <title>Quinielas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../css/estilos.css">

    </head>
    <body>
        <header>
            <figure>
                <img src="../img/logo_250.png">
            </figure>
        </header>
        <main>
            <div class="contenedor__todo">


                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar</p>
                        <button id="btn__iniciar-sesion" >Quiero iniciar sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Aún no tengo cuenta</h3>
                        <p>Registrarse para iniciar sesión</p>
                        <button id="btn__registrarse">Me quiero registrar</button>
                    </div>
                </div>
            

                <div class="contenedor__login-register">
                    <form action="../php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar sesión</h2>
                        <input type="text" placeholder="Correo electrónico" name="correo">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Ingresar</button>
                    </form>
                    <form action="../php/registro_usuario_bd.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre de usuario" name="usuario">
                        <input type="text" placeholder="Correo electrónico" name="correo">
                     <input type="password" placeholder="Contraseña" name="password">
                        <button>Registrarme</button>
                    </form>
                 </div>
            </div>
        </main>
        <script src="../js/script.js"></script>

    </body>
</html>