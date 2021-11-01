<?php

$db = require '../connect.php';

$response = [];

if (isset($_POST)) {


    $errors = [];
    $fields = [];

    foreach ($fields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $errors[$field] = "the $field field is required";
        }
    }

    if (count($errors) < 1) {


        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        try {
            $query = "SELECT * FROM users WHERE email = '$email' OR username = '$email'";
            $pdo = $db->connect();
            $statement = $pdo->prepare($query);
            $statement->execute();
            // $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            if ($result && password_verify($password, $result['password'])) {
                $_SESSION['user'] = $result;
                $response['message'] = 'Login Successful!';
            } else {
                $response['error'] = 'invalid login details';
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $pdo = null;
    } else {
        $response['errors'] = $errors;
    }

    echo json_encode($response);
}
