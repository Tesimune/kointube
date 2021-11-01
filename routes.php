<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

get('/',  isset($_SESSION['user']) ? 'index.php' : 'landing.php');
post('/register', 'post/register.php');
any('/404', 'error/404.php');
