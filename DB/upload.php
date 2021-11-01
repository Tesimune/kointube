<?php

$db = require_once 'connect.php';

if ($_POST) {

    $title = htmlspecialchars($_POST['title']);
    $slug = str_replace(' ', '_', $title);
    $user_id = htmlspecialchars($_SESSION['user']['id']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);
    $categories = htmlspecialchars($_POST['categories']);

    $uploads_dir = '../uploads/';
    $videoUrl = "";
    $trailer = "";
    $thumbnail = "";

    if ($_FILES) {

        foreach (array_keys($_FILES) as $key) {

            $file = $_FILES[$key];
            $tmp_name = $file['tmp_name'];
            $fileExt = strchr($file['name'], '.');
            $name = $slug . $fileExt;

            switch ($key) {
                case 'thumbnail':
                    move_uploaded_file($tmp_name, "$uploads_dir/images/$name");
                    $thumbnail = "uploads/images/$name";
                    break;
                case 'trailer':
                    move_uploaded_file($tmp_name, "$uploads_dir/trailers/$name");
                    $trailer = "uploads/trailers/$name";
                    break;
                case 'video':
                    move_uploaded_file($tmp_name, "$uploads_dir/videos/$name");
                    $videoUrl = "uploads/videos/$name";
                    break;
            }
        }
    }

    try {
        $sql = "INSERT INTO streams (user_id, title, slug, description, thumbnail, trailer, url, categories, price) 
            VALUES ('$user_id', '$title', '$slug', '$description', '$thumbnail', '$trailer', '$videoUrl', '$categories', '$price')";

        $pdo = $db->connect();
        $pdo->exec($sql);
        echo "New record created successfully";
        header("Location:  ../userprofile.php");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
