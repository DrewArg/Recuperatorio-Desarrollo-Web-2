<?php

try {
    $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    header('Location: error.php');
}

// function getCategorias(PDO $conexion)
// {
//     $consulta = $conexion->prepare('
//         SELECT id, nombre
//         FROM categorias
//         ORDER BY nombre
//     ');
//     $consulta->execute();
//     $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
//     return $categorias;
// }

// function addProducto(PDO $conexion, $data)
// {
//     $consulta = $conexion->prepare('
//         INSERT INTO productos(nombre, descripcion, precio, categoria_id, imagen)
//         VALUES(:nombre, :descripcion, :precio, :categoria_id, :imagen)
//     ');
//     $consulta->bindValue(':nombre', $data['nombre']);
//     $consulta->bindValue(':descripcion', $data['descripcion']);
//     $consulta->bindValue(':precio', $data['precio']);
//     $consulta->bindValue(':categoria_id', $data['categoria_id']);
//     $consulta->bindValue(':imagen', $data['imagen']);
//     $consulta->execute();
// }

function getCards(PDO $connection)
{
    $querie = $connection->prepare('SELECT * FROM cartas');
    $querie->execute();
    $cards = $querie->fetchAll(PDO::FETCH_ASSOC);
    return $cards;
}

// function getProductoById(PDO $conexion, $id)
// {
//     $consulta = $conexion->prepare('
//         SELECT id, nombre, descripcion, precio, categoria_id, imagen
//         FROM productos
//         WHERE id = :id
//     ');
//     $consulta->bindValue(':id', $id);
//     $consulta->execute();
//     $producto = $consulta->fetch(PDO::FETCH_ASSOC);
//     return $producto;
// }

// function updateProducto(PDO $conexion, $id, $data)
// {
//     $consulta = $conexion->prepare('
//         UPDATE productos
//         SET
//             nombre = :nombre,
//             descripcion = :descripcion,
//             precio = :precio,
//             categoria_id = :categoria_id,
//             imagen = :imagen
//         WHERE id = :id
//     ');
//     $consulta->bindValue(':nombre', $data['nombre']);
//     $consulta->bindValue(':descripcion', $data['descripcion']);
//     $consulta->bindValue(':precio', $data['precio']);
//     $consulta->bindValue(':categoria_id', $data['categoria_id']);
//     $consulta->bindValue(':imagen', $data['imagen']);
//     $consulta->bindValue(':id', $id);
//     $consulta->execute();
// }

// function deleteProducto(PDO $conexion, $id)
// {
//     $consulta = $conexion->prepare('
//         DELETE FROM productos
//         WHERE id = :id
//     ');
//     $consulta->bindValue(':id', $id);
//     $consulta->execute();
// }
