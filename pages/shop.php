<?php
require('../layout/_constants.php');
require_once('../functions/func_queries.php');

$cards = getCards($connection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title>Tienda</title>
</head>

<body class="body">
    <?php require('../layout/_header.php') ?>

    <main>
        <div class="titulo__tienda">
            <h1 id="tituloCambiante">Tienda</h1>
            <div class=" titulo__subtitulo">
                <p>Aquí podrás comprar nuevas cartas y/o mazos.</p>
            </div>
            <div class="carta">
                <?php
                foreach ($cards as $card) :
                ?>

                    <div class="carta__contorno<?php echo $card['tipo'] ?>" id="tipo<?php echo $card['id'] ?>">
                        <div class="carta__superior">
                            <div class="carta__superior--tipo" id="tipoCarta<?php echo $card['id'] ?>">
                                [<?php echo $card['tipo'] ?>]
                            </div>
                            <div class="carta__cartaReal">
                                <a href="<?php echo BASE_URL; ?>/pages/card_info.php?id=<?php echo $card['id']; ?>">
                                    <div class="carta__medio">
                                        <div class="carta__medio--nombre" id="nombreCarta<?php echo $card['id'] ?>">
                                            <?php echo $card['nombre'] ?>
                                        </div>
                                        <div class="carta__medio--imagen" id="imagenCarta<?php echo $card['id'] ?>">
                                            <img src="../assets/<?php echo $card['imagen'] ?>">
                                        </div>
                                    </div>
                                </a>
                                <div class="carta__inferior">
                                    <div class="carta__inferior--efecto" id="efectoCarta<?php echo $card['id'] ?>">
                                        <p>
                                            <?php echo $card['efecto'] ?>
                                        </p>
                                        <p>
                                            Cuesta <?php echo $card['alimentos'] ?> alimentos bajarla al tablero.
                                        </p>
                                    </div>

                                </div>
                                <div class="carta__precio">
                                    <span>AR$<?php echo $card['precio'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>

    </main>
    <?php require('../layout/_footer.php') ?>
    <script src="<?php echo BASE_URL ?>/js/cards/cardList.js"></script>

</body>

</html>