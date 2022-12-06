<?php
require('../layout/_constants.php');

require_once('../functions/func_input.php');

$nombre = clean_input_data($_POST['nombre'] ?? null);
$email = clean_input_data($_POST['email'] ?? null);
$edad = clean_input_data($_POST['edad'] ?? null);
$servicios = $_POST['servicios'] ?? array();
$mensaje = clean_input_data($_POST['mensaje'] ?? null);

$errores = array();

// esta info de caontacto deberia aparecer para finalizar la compra en el carrito

if (isset($_POST['submit'])) {

    if (empty($nombre)) {
        array_push($errores, 'Usted debe ingresar un nombre.');
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        array_push($errores, 'Usted debe ingresar un correo electrónico con formato válido.');
    }

    $opciones_edad = array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 120
        )
    );

    if (filter_var($edad, FILTER_VALIDATE_INT, $opciones_edad) == FALSE) {
        array_push($errores, 'Usted debe ingresar una edad válida.');
    }

    if (count($servicios) == 0) {
        array_push($errores, 'Usted debe seleccionar al menos un servicio.');
    }

    if (count($errores) == 0) {
        header('Location: resultado_formulario.php');
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <?php require('../layout/_metaTags.php') ?>
    <?php require('../layout/_styleSheet.php') ?>
    <title> Contacto </title>
</head>

<body>
    <?php require('../layout/_header.php') ?>

    <main>
        <div class="container">

            <h1>Contacto</h1>

            <ul>
                <?php foreach ($errores as $error) : ?>
                    <li class="text text-danger"> <?php echo $error ?> </li>
                <?php endforeach ?>
            </ul>

            <form action="formulario.php" method="post">

                <div class="form-group mb-3">
                    <label for="nombre"> Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="<?php echo $nombre ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico" value="<?php echo $email ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="edad"> Edad </label>
                    <input type="number" min="1" max="120" class="form-control" name="edad" id="edad" placeholder="Ingrese una edad" value="<?php echo $edad ?>">
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="servicios[]" id="serv_cable" value="cable">
                    <label class="form-check-label" for="serv_cable"> Televisión por cable </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="servicios[]" id="serv_internet" value="internet">
                    <label class="form-check-label" for="serv_internet"> Internet </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="servicios[]" id="serv_telefono" value="telefono">
                    <label class="form-check-label" for="serv_telefono"> Teléfono </label>
                </div>

                <div class="form-group mb-3">
                    <label for="mensaje"> Mensaje (textarea) </label>
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="submit"> Enviar </button>
            </form>

        </div>
    </main>
    <?php require('../layout/_footer.php') ?>
</body>

</html>