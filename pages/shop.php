<?php
require('../layout/_constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title>Tienda de Cartas</title>
</head>

<body class="body">
    <?php require('../layout/_header.php') ?>

    <main>
        <div class="titulo__tienda">
            <h2 id="tituloCambiante"">Tienda</h2>
            <div class=" titulo__subtitulo">
                <p>Aquí podrás comprar nuevas cartas y/o mazos.</p>
        </div>


        <div class="filtro">
            <div class="filtro__nombre">
                <h3>¿Búscas alguna carta en particular?</h4>

                    <div class="filtro__nombre--busqueda">
                        <input type="search" id="cartaBuscada" placeholder="Nombre de la carta">
                        <button id="btnNombre">Buscar</button>
                    </div>
            </div>

            <div class="filtro__tipo">
                <h3>¿Algún tipo en particular?</h3>
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

        <div class="carta">

        </div>
    </main>
    <?php require('../layout/_footer.php') ?>
    <?php require('../layout/_jsScripts.php') ?>

</body>

</html>