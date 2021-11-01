<?php

$db = require 'connect.php';

try {
    $pdo = $db->connect();

    $stmt = $pdo->prepare("SELECT * FROM streams");
    $stmt->execute();
    // $stmt->setFetchMode(PDO::FETCH_OBJ);
    $streams = $stmt->fetchAll();
    return $streams;
} catch (PDOException $e) {
    die($e->getMessage());
}
