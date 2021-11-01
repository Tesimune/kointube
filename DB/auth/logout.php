<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('location: ../../landing.php');
} else {
    unset($_SESSION['user']);
    header('location: ../../landing.php');
}
