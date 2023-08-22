<?php 



        $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', ''); 

        $select = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias2 WHERE nome = 'terror')");

        $select->execute();

        echo '<pre>';
        var_dump($select->fetchAll());
        echo '</pre>;'


?>