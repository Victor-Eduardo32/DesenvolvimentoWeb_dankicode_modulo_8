<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', ''); 

    $sql = $pdo->prepare("SELECT * FROM clientes2 WHERE data BETWEEN '2020-01-01' AND '2023-08-17'");

    $sql->execute();

    $emails = $sql->fetchAll();

    print_r($emails);
?>