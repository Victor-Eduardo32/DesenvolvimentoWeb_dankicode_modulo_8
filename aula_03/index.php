<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root','');


    $id = 3;

    //OR funciona como 'ou'
    //AND funciona como 'e'

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario', sobrenome='da Silva' WHERE id=$id");
    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso';
    }
?>