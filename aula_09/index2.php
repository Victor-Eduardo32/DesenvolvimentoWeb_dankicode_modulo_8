<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    $sql = $pdo->prepare('SELECT * FROM `clientes`');

    $sql->execute();

    $usuario = $sql->fetchAll();
    foreach ($usuario as $key => $value) {
        echo $value['nome'];    
        echo '<hr />';
    }
?>