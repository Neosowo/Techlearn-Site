<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: home.php");
    }

    

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login | Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/log.css">


    <meta property="og:title" content="TechLearn">
    <meta property="og:description" content="TechLearn es una plataforma con mucho contenido educativo :D! | ERICK YÁNEZ">
    <meta property="og:image" content="https://cdn.discordapp.com/attachments/1095442990492819637/1095892423550435400/ico.png">

</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

    <div class="contenedor__login-register">
    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
        <div class="contenedor__campo">
            <img src="logo/ico.png" alt="imagen de inicio de sesión" style="display: block; margin: 0 auto; width: 27%; position: relative; margin-top: -34px">
        </div>
        <h2>Iniciar Sesión</h2>
        <input type="text" placeholder="Correo Electronico" name="correo">
        <input type="password" placeholder="Contraseña" name="contrasena">
        <button>Entrar</button>
    </form>

    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
        <div class="contenedor__campo">
            <img src="logo/ico.png" alt="imagen de inicio de sesión" style="display: block; margin: 0 auto; width: 27%; margin-top: -35px;">
        </div>
        <h2>Regístrarse</h2>
        <input type="text" placeholder="Nombre completo" name="nombre_completo">
        <div class="contenedor__campo">
            <input type="text" placeholder="Correo Electronico" name="correo">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="contrasena">
        </div>
        <button type="submit">Regístrarse</button>
    </form>
</div>


            </div>

        </main>

        <script src="js/index-log.js"></script>
</body>
</html>