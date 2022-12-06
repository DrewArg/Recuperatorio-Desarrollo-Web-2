<?php

try {
    $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    header('Location: error.php');
}
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

function addQuestion(PDO $connection, $data)
{
    $query = $connection->prepare('
        INSERT INTO preguntas(nombre, email, pregunta)
        VALUES(:nombre, :email,:pregunta)
    ');

    $query->bindValue(':nombre', $data['nombre']);
    $query->bindValue(':email', $data['email']);
    $query->bindValue(':pregunta', $data['pregunta']);
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
