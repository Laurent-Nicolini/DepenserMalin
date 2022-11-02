<?php

try {
    //$pdo = new PDO("mysql:host=localhost;dbname=odrl9643_depensermalin","odrl9643_admindmalin","!g5&QfP2hQ94@#8");
    $pdo = new PDO("mysql:host=localhost;dbname=depensermalin","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
}