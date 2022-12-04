<?php
require('./layout/_constants.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('./layout/_metaTags.php') ?>
    <?php require('./layout/_styleSheet.php') ?>

    <title>Batalla Reino Animal</title>
</head>

<body class="body">
    <header>
        <nav class="topNav">
            <a href="<?php echo BASE_URL; ?>/index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>/pages/shop.php">Tienda</a>
            <a href="<?php echo BASE_URL; ?>/pages/rules.php">Reglamento</a>
            <a href="<?php echo BASE_URL; ?>/pages/cart.php">Carrito</a>
        </nav>
    </header>

    <main>
        <div class="titulo" id="tituloHome">
            <h1 class="titulo__h1">Batalla por el Reino Animal</h1>
            <div class="titulo__subtitulo">"La Batalla del Reino Animal" es un juego de cartas por turnos para dos
                jugadores que está basado en "Mitos
                y
                Leyendas"</div>
        </div>

        <div class="center">
            <button id="showLogin">Ingresar</button>
        </div>
        <div class="popup">
            <div class="closeBtn">&times;</div>
            <div class="form" id="form">
                <h2>Ingresa</h2>
                <div class="form__element">
                    <label for="text">Usuario</label>
                    <input type="text" id="nombreUsuario" placeholder="Ingresa tu usuario">
                </div>
                <div class="form__element">
                    <label for="password">Contraseña</label>
                    <input type="password" id="contrasena" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form__element">
                    <input type="checkbox" id="recordar">
                    <label for="recordar">Recordar</label>
                </div>
                <div class="form__element">
                    <button class="btnIngreso" id="btnIngreso">Ingresar</button>
                </div>
                <div class="form__footer">
                    <div class="form__element">
                        <a href="#" onclick="recordarContrasena()">Olvidé mi contraseña</a>
                    </div>
                    <div class="form__element">
                        <a href="#" onclick="crearUsuario()">Crear usuario</a>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <?php require('./layout/_footer.php') ?>
    <?php require('./layout/_jsScripts.php') ?>
</body>

</html>