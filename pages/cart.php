<?php
require('../layout/_constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Tu Carrito</title>
</head>

<body class="body">
    <?php require('../layout/_header.php') ?>
    <main>

        <div class="carritoUsuario">

            <h2 id="tituloCambiante"></h2>
            <div class=" titulo__subtitulo">


                <div class="informacionCarrito">

                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="../script/clases.js"></script>
            <script src="../script/funcionesGenerales.js"></script>
            <script src="../script/carrito.js"></script>
            <script src="../script/carritoUsuario.js"></script>
    </main>
</body>

</html>