<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=db_leste', 'root', '');
    $sql = $pdo->prepare('SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 2,3');
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo '<hr />';
    }


?>