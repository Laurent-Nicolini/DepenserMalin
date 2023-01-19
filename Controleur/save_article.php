<?php
session_start();
$titre = htmlspecialchars($_POST['titre']);
$texte = htmlspecialchars($_POST['article']);
$auteur = "DevShivan";
include "connexionbdd.php";

$statement = $pdo->prepare(
    "INSERT INTO articles(titre,texte,auteur) VALUES (:titre,:texte,:auteur)"
);
$statement->bindValue(":titre",$titre,PDO::PARAM_STR);
$statement->bindValue(":texte",$texte,PDO::PARAM_STR);
$statement->bindValue(":auteur",$auteur,PDO::PARAM_STR);
$statement->execute();
$_SESSION['save_article'] = "ok";
header("Location: ../Modele/ajouter_article.php");
exit();