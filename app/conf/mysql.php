<?php

try {
    $db = new PDO(
        'mysql:host=DataBase1;dbname=dataBaseBlock;charset=utf8mb4',
        'root'
    );
} catch (PDOException $e) {
    die('Erreur occured :'.$e->getMessage());
}