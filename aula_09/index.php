<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    $pdo->exec("LOCK TABLES `clientes` WRITE");

    sleep(10);

?>