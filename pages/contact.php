<?php
require('../layout/_constants.php');
require_once('../functions/func_queries.php');

$cards = getCards($connection);

require_once('../functions/func_input.php');

if (isset($_POST['submit'])) {

    $compraNombre = clean_input_data($_POST['compraNombre']);
    $compraEmail = clean_input_data($_POST['compraEmail']);
    $requestedCards = implode(",", $_POST['requestedCards']);
    $compraCopias = clean_input_data($_POST['masCartas'] ?? null);
    $otraPregunta = clean_input_data($_POST['otraPregunta'] ?? null);
    $errores = array();

    if (empty($compraNombre)) {
        array_push($errores, 'Debe ingresar un nombre.');
    }

    if (empty($compraEmail)) {
        array_push($errores, 'Debe ingresar un email.');
    }

    if (!empty($_POST['requestedCards'])) {
        addOrder($connection, array(
            'nombre' => $compraNombre,
            'email' => $compraEmail,
            'cartas' => $requestedCards,
            'copias' => $compraCopias,
            'preguntas' => $otraPregunta
        ));

        header("Location:" . BASE_URL . "/pages/confirmation.php");
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
        <div class="contacto">
            <h1>Contactanos</h1>
            <h2>¿Querés comprar?</h2>
            <h3>Dejanos tu informacion de contacto y tu pedido así nos contactamos con vos.</h3>
            <form method="post">
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
                <textarea name="otraPregunta" id="otraPregunta" rows="3"></textarea>

                <button type="submit" name="submit">¡Quiero mis cartas!</button>
            </form>

            <h2>¿Querés preguntar algo?</h2>
            <h3>Dejanos tu informacion de contacto y tu pregunta así nos contactamos con vos.</h3>

        </div>
    </main>
    <?php require('../layout/_footer.php') ?>
</body>

</html>