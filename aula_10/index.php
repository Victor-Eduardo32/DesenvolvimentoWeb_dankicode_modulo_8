<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', ''); 

    $sql = $pdo->prepare("SELECT * FROM clientes2 WHERE email LIKE '%v%' ");

    $sql->execute();

    $emails = $sql->fetchAll();

    print_r($emails);
?>