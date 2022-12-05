<?php 

require_once('conf/conf.php');
require_once('functions/func_queries.php');

$cards = getCards($connection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lista de productos</title>
    <?php require('layout/_css.php') ?>
</head>

<body>
    <?php require('layout/_nav.php') ?>
    <div id="layoutSidenav">
        <?php require('layout/_layout_nav.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <h1 class="mt-4"> Lista de productos </h1>

                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-list me-1"></i>
                        </div>

                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Nombre </th>
                                        <th scope="col"> Precio </th>
                                        <th scope="col"> Categoría </th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php foreach($productos as $prod): ?>
                                        <tr>
                                            <td> <?php echo $prod['nombre'] ?> </td>
                                            <td> $<?php echo number_format($prod['precio'], 2, ',', '.') ?> </td>
                                            <td> <?php echo $prod['categoria_nombre'] ?> </td>
                                            <td> 
                                                <a target="_blank" href="<?php echo BASE_URL . $prod['imagen'] ?>" class="text text-primary btn-image" title="Ver imagen">  
                                                    <i class="fas fa-image fa-lg"></i>
                                                </a>
                                                |
                                                <a href="<?php echo BASE_URL ?>update-producto.php?id=<?php echo $prod['id'] ?>" class="text text-success" title="Editar producto">  
                                                    <i class="fas fa-edit fa-lg"></i>
                                                </a>
                                                |
                                                <a href="<?php echo BASE_URL ?>delete-producto.php?id=<?php echo $prod['id'] ?>" class="text text-danger btn-delete" title="Eliminar producto">  
                                                    <i class="fas fa-trash fa-lg"></i>
                                                </a>
                                            </td>
                                        </tr>                            
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </main>
            <?php require('layout/_footer.php') ?>
        </div>
    </div>
    <?php require('layout/_js.php') ?>
    <script src="<?php echo BASE_URL ?>js/productos/list-productos.js"></script>
</body>

</html>