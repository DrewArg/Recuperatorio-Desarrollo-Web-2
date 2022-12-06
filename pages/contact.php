<?php
require('../layout/_constants.php');
require_once('../functions/func_queries.php');

$cards = getCards($connection);

require_once('../functions/func_input.php');

$errores = array();

$compraNombre = clean_input_data($_POST['compraNombre'] ?? null);
$compraEmail = clean_input_data($_POST['compraEmail'] ?? null);
$requestedCards = $_POST['requestedCards'] ?? array();
$compraCopias = clean_input_data($_POST['masCartas'] ?? null);
$otraPregunta = clean_input_data($_POST['otraPregunta'] ?? null);

if (isset($_POST['submit'])) {


    if (empty($compraNombre)) {
        array_push($errores, 'Debe ingresar un nombre.');
    }

    if (empty($compraEmail)) {
        array_push($errores, 'Debe ingresar un email.');
    }

    if (count($requestedCards) == 0) {
        array_push($errores, 'Debe seleccionar al menos una carta.');
    }

    if (count($errores) == 0) {
        $requestedCards = implode(",", $_POST['requestedCards']);

        if (!empty($_POST['requestedCards'])) {
            addOrder(
                $connection,
                array(
                    'nombre' => $compraNombre,
                    'email' => $compraEmail,
                    'cartas' => $requestedCards,
                    'copias' => $compraCopias,
                    'preguntas' => $otraPregunta
                )
            );

            header("Location:" . BASE_URL . "/pages/confirmation.php");
        }
    } else {
        header("Location:" . BASE_URL . "/pages/error.php");
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title>Contacto</title>
</head>

<body class="body">
    <?php require('../layout/_header.php') ?>

    <main>
        <h1 id="tituloCambiante">Contactanos</h1>
        <p class=" titulo__subtitulo">Dejanos tu informacion de contacto y tu pedido así nos contactamos con vos.</p>
        <form id="awesome__form" method="post">
            <label for="compraNombre">Nombre</label>
            <input required type="text" name="compraNombre" id="compraNombre" placeholder="Ingrese su nombre" value="<?php echo $compraNombre ?>">

            <label for="compraEmail">Email</label>
            <input required type="email" name="compraEmail" id="compraEmail" placeholder="Ingrese su correo electrónico" value="<?php echo $compraEmail ?>">

            <label for="requestedCards[]">¿Qué cartas te gustaría comprar?</label>
            <?php if ($cards) : ?>
                <?php foreach ($cards as $card) : ?>
                    <input type="checkbox" name="requestedCards[]" value="<?php echo $card['nombre'] ?>" />[<?php echo $card['tipo'] ?>]<?php echo $card['nombre'] ?>: AR$<?php echo $card['precio'] ?><br />
                <?php endforeach ?>
                <label for="masCartas">¿Querés más de una copia de alguna carta?</label>
                <textarea name="masCartas" id="masCartas" rows="3" placeholder="indicanos cual.." value="<?php echo $compraCopias ?>"></textarea>
            <?php else : ?>
                <p>Oops parece que en este momento no tenemos ninguna carta para vender.</p>
            <?php endif ?>
            <label for="otraPregunta">¿Tenés alguna otra pregunta?</label>
            <textarea name="otraPregunta" id="otraPregunta" rows="3" placeholder="indicanos cual.."></textarea>

            <button type="submit" name="submit">¡Quiero mis cartas!</button>
        </form>
    </main>
    <?php require('../layout/_footer.php') ?>
</body>

</html>