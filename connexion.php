<?php

    require_once __DIR__ . '/vendor/autoload.php';

    // Chargement des variables d'environnement
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $host = $_ENV["DB_HOST"];
    $port = $_ENV["DB_PORT"];
    $dbname = $_ENV["DB_NAME"];
    
    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $user = $_ENV["DB_USER"];
    $password = $_ENV["DB_PASS"];
    
    $db = new PDO(
        $connexionString,
        $user,
        $password
    );
?>