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
            <h1 id="tituloCambiante"">Tienda</h1>
            <div class=" titulo__subtitulo">
                <p>Aquí podrás comprar nuevas cartas y/o mazos.</p>
        </div>


        <div class="filtro">
            <div class="filtro__nombre">
                <h2>¿Búscas alguna carta en particular?</h2>

                <div class="filtro__nombre--busqueda">
                    <input type="search" id="cartaBuscada" placeholder="Nombre de la carta">
                    <button id="btnNombre">Buscar</button>
                </div>
            </div>

            <div class="filtro__tipo">
                <h2>¿Algún tipo en particular?</h2>
                <label for="tipoCarta"></label>
                <select name="tipoCarta" id="tipoCarta">
                    <option value="Todos">Todos</option>
                    <option value="Alimento">Alimento</option>
                    <option value="Animal">Animal</option>
                    <option value="Habilidad">Habilidad</option>
                    <option value="Habitat">Hábitat</option>
                </select>
                <button id="btnTipo">Buscar</button>
            </div>

            <div>
                <button id="btnRefresh">Reiniciar Filtros</button>
            </div>
        </div>
        <?php
        foreach ($cards as $card) :
        ?>
            <div class="carta">
                <div class="carta__contorno<?php echo $card['tipo'] ?>" id="tipo<?php echo $card['id'] ?>">
                    <div class="carta__superior">
                        <div class="carta__superior--tipo" id="tipoCarta<?php echo $card['id'] ?>">
                            <?php echo $card['tipo'] ?>
                        </div>
                        <div class="carta__cartaReal">
                            <div class="carta__medio">
                                <div class="carta__medio--nombre" id="nombreCarta<?php echo $card['id'] ?>">
                                    <?php echo $card['nombre'] ?>
                                </div>
                                <div class="carta__medio--imagen" id="imagenCarta<?php echo $card['id'] ?>">
                                    <img src="../assets/<?php echo $card['imagen'] ?>">
                                </div>
                            </div>
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
                                <form action="POST">
                                    <span>AR$<?php echo $card['precio'] ?></span>
                                    <input type="submit" id="btnMenos<?php echo $card['id'] ?>" class="btnMenos" name="btnMenos" value="-">
                                    <span class="cantidadRequerida" id="cantidadRequerida<?php echo $card['id'] ?>">0</span>
                                    <input type="submit" id="btnMas<?php echo $card['id'] ?>" class="btnMas" name="btnMas" value="+">
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </main>
    <?php require('../layout/_footer.php') ?>
    <?php require('../layout/_jsScripts.php') ?>
    <script src="<?php echo BASE_URL ?>js/productos/list-productos.js"></script>

</body>

</html>