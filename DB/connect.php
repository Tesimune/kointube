<?php
session_start();

// connect to database
// $db = mysqli_connect('localhost', 'root', '', 'kointube');

class DB
{
    private $dbname = 'kointube';
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';

    public function connect()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

return new DB();
