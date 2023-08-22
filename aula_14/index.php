<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    /*
    $allTable = $pdo->query("SHOW TABLES");
    $allTable->fetchAll();

    echo '<pre>';
    print_r($allTable);
    echo '</pre>';
    */

    $sql = 'CREATE TABLE cursos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50), 
        reg_date TIMESTAMP
    )';


    $pdo->exec($sql);

    

?>