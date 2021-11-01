<?php

$db = require 'connect.php';

if (isset($_GET['id'])) {

    $id = htmlspecialchars($_GET['id']);

    try {
        $pdo = $db->connect();

        $stmt = $pdo->prepare("SELECT * FROM streams WHERE id = $id");
        $stmt->execute();
        $stream = $stmt->fetch();
        return $stream;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
