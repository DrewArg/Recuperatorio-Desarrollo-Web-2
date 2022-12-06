<?php
require('../layout/_constants.php');
require_once('../functions/func_queries.php');

if (isset($_GET['id'])) {
    $currentCard = getCardById($connection, $_GET['id']);
    if (!$currentCard) {
        goToError404();
    }
} else {
    goToError();
}

function goToError()
{
    header("Location:" . BASE_URL . "/pages/error.php");
}

function goToError404()
{
    header("Location:" . BASE_URL . "/pages/error404.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title>Información Carta</title>
</head>

<body class="body">
    <?php require('../layout/_header.php') ?>

    <main>
        <div class="inspeccionCarta">
            <div class="carta__contorno<?php echo $currentCard['tipo'] ?>" id="tipo<?php echo $currentCard['id'] ?>">
                <div class="carta__superior">
                    <div class="carta__superior--tipo" id="tipoCarta${cartaAVer.id}">[<?php echo $currentCard['tipo'] ?>]</div>
                </div>
                <div class="carta__cartaReal">
                    <div class="carta__medio">

                        <div class="carta__medio--nombre" id="nombreCarta${cartaAVer.id}"><?php echo $currentCard['nombre'] ?></div>
                        <div class="carta__medio--imagen" id="imagenCarta${cartaAVer.id}"><img src="../assets/<?php echo $currentCard['imagen'] ?>"></div>
                    </div>
                    <div class="carta__inferior">
                        <div class="carta__inferior--efecto" id="efectoCarta${cartaAVer.id}"><?php echo $currentCard['efecto'] ?></div>
                    </div>
                    <div class="carta__precio">
                        <span>AR$<?php echo $currentCard['precio'] ?></span>
                    </div>
                </div>
            </div>
            <div class="descripcionCarta">
                <?php if ($currentCard['tipo'] == "Animal") : ?>
                    <div class="contenedorDescripcion">
                        <div class="tituloDescripción"><?php echo $currentCard['nombre'] ?></div>
                        <div class="descripcionGeneral">
                            <p>Los animales son las cartas que se utilizan en la batalla. Todos los animales poseen un coste y un daño.
                                Algunos de ellos tienen un efecto.</p>
                            <ul>
                                <li>Daño: <?php echo $currentCard['dano'] ?></li>
                                <li>Alimentos: <?php echo $currentCard['alimentos'] ?></li>
                                <?php if ($currentCard['efecto'] != "") : ?>
                                    <li>Efecto:<?php echo $currentCard['efecto'] ?></li>
                                <?php endif ?>

                            </ul>
                        <?php elseif ($currentCard['tipo'] == "Habilidad") : ?>
                            <div class="contenedorDescripcion">
                                <div class="tituloDescripción"><?php echo $currentCard['nombre'] ?></div>
                                <div class="descripcionGeneral">
                                    <p>Las habilidades son cartas que se juegan desde la mano del jugador pagando su coste en alimentos. Estas
                                        habilidades sirven como modificadores de los animales aliados o enemigos. Las habilidades son cartas que
                                        luego de utilizadas, se destruyen.</p>
                                    <ul>
                                        <li>Alimentos: <?php echo $currentCard['alimentos'] ?></li>
                                        <li>Efecto:<?php echo $currentCard['efecto'] ?></li>
                                    </ul>
                                </div>

                            <?php elseif ($currentCard['tipo'] == "Habitat") : ?>
                                <div class="contenedorDescripcion">
                                    <div class="tituloDescripción"><?php echo $currentCard['nombre'] ?></div>
                                    <div class="descripcionGeneral">
                                        <p>Los hábitats son cartas similares a las habilidades pero que se mantienen en juego indefinidamente.</p>
                                        <ul>
                                            <li>Alimentos: <?php echo $currentCard['alimentos'] ?></li>
                                            <li>Efecto:<?php echo $currentCard['efecto'] ?></li>
                                        </ul>
                                    </div>
                                <?php elseif ($currentCard['tipo'] == "Alimento") : ?>
                                    <div class="contenedorDescripcion">
                                        <div class="tituloDescripción"><?php echo $currentCard['nombre'] ?></div>
                                        <div class="descripcionGeneral">
                                            <p>Los alimentos sirven como "moneda" en el juego, se utilizan para "pagar" el coste de los demás tipos de
                                                cartas y de esta manera ponerlos en juego.</p>
                                        </div>
                                    <?php endif ?>
                                    </div>
                                </div>

    </main>
    <?php require('../layout/_footer.php') ?>
</body>

</html>