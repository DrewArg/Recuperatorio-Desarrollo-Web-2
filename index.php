<?php
require('./layout/_constants.php');

if (array_key_exists('go_rules', $_POST)) {
    goToRules();
} else if (array_key_exists('go_shop', $_POST)) {
    goToShop();
}
function goToRules()
{
    header("Location:" . BASE_URL . "/pages/rules.php");
}
function goToShop()
{
    header("Location:" . BASE_URL . "/pages/shop.php");
}

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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/shop.php">Tienda</a>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/rules.php">Reglamento</a>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/contact.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="titulo" id="tituloHome">
            <h1 class="titulo__h2">Final</h1>
            <div class="ficha__index">
                <p>
                    Alumno: Andrés Ezequiel Fabbiano
                </p>
                <p>
                    Materia: Programación Web II
                </p>
                <p>
                    Carrera: Analista de Sistemas
                </p>
                <p>
                    Año: 2022
                </p>
            </div>


            <h2 class="titulo__h2">Batalla por el Reino Animal</h2>
            <p class="titulo__subtitulo">"Batalla del Reino Animal" es un juego de cartas por turnos para dos
                jugadores que está basado en <span class="underlined"><a href="https://myl.cl/" target="_blank">Mitos
                        y
                        Leyendas</a></span></p>
            <p class="titulo__subtitulo">¿Querés saber más?</p>

            <form method="POST">
                <input type="submit" name="go_rules" value="Leer el Relgamento" />
                <input type="submit" name="go_shop" value="Ir de Compras" />
            </form>

        </div>
    </main>

    <?php require('./layout/_footer.php') ?>
</body>

</html>