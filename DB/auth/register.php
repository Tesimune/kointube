<?php

$db = require '../connect.php';

if (isset($_POST)) {

    $user = [
        'first_name' => htmlspecialchars($_POST['first_name']),
        'last_name' => htmlspecialchars($_POST['last_name']),
        'username' => htmlspecialchars($_POST['username']),
        'email' => htmlspecialchars($_POST['email']),
        'password' => htmlspecialchars($_POST['password']),
        'cpassword' => htmlspecialchars($_POST['cpassword'])
    ];

    $response = [];
    $errors = [];

    foreach ($user as $field => $value) {

        if (!isset($user[$field]) || empty($user[$field])) {
            $errors[$field] = "the $field field is required";
        } elseif ($field == 'cpassword' && $user[$field] != $user['password']) {
            $errors['cpassword'] = "the password confirmation does not match";
        }
    }

    if (count($errors) < 1) {

        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];

        try {
            $password = password_hash($user['password'], PASSWORD_DEFAULT);
            $query = "INSERT INTO users (first_name, last_name, username, email, password)
                            VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";
            $pdo = $db->connect();
            $pdo->exec($query);

            $query = "SELECT * FROM users WHERE email = '$email' OR username = '$email'";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $_SESSION['user'] =  $statement->fetch();
            $response['message'] = 'Your account has been created successfully';
            echo json_encode($response);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $pdo = null;
    } else {
        $response['errors'] = $errors;
        echo json_encode($response);
    }
}
