<?php
require('../layout/_constants.php');

if (array_key_exists('go_index', $_POST)) {
    goToIndex();
}
function goToIndex()
{
    header("Location:" . BASE_URL . "/index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title>Error</title>
</head>

<body class="body">
    <?php require('../layout/_header.php') ?>

    <main>
        <div class="titulo__tienda">
            <h1 id="tituloCambiante"">Error</h1>
            <h2>¡Oops parece que que ocurrió un error!</h2>
            <div class=" titulo__subtitulo">
                <form method="POST">
                    <p>Nos disculpamos por los inconvenientes ocasionados.</p>
                    <p>Regresa a la página principal.</p>
                    <input type="submit" name="go_index" value="Regresar a la página principal" />
                </form>
        </div>


    </main>
    <?php require('../layout/_footer.php') ?>
    <script src="<?php echo BASE_URL ?>/js/cards/cardList.js"></script>

</body>

</html>