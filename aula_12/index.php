<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', ''); 

    $select = $pdo->prepare('SELECT * FROM clientes2 GROUP BY cargo HAVING pontos > 5');

    $select->execute();

    echo '<pre>';
    print_r($select->fetchAll());
    echo '</pre>;'
?>