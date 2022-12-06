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

function addOrder(PDO $connection, $data)
{
    $query = $connection->prepare('
        INSERT INTO ordenes(nombre, email, cartas, copias, preguntas)
        VALUES(:nombre, :email, :cartas, :copias, :preguntas)
    ');

    $query->bindValue(':nombre', $data['nombre']);
    $query->bindValue(':email', $data['email']);
    $query->bindValue(':cartas', $data['cartas']);
    $query->bindValue(':copias', $data['copias']);
    $query->bindValue(':preguntas', $data['preguntas']);
    $query->execute();
}

function getCards(PDO $connection)
{
    $querie = $connection->prepare('SELECT * FROM cartas');
    $querie->execute();
    $cards = $querie->fetchAll(PDO::FETCH_ASSOC);
    return $cards;
}

function getCardById(PDO $connection, $id)
{
    $query = $connection->prepare('SELECT * FROM cartas WHERE id = :id');
    $query->bindValue(':id', $id);
    $query->execute();
    $card = $query->fetch(PDO::FETCH_ASSOC);
    return $card;
}

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
