<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Marre de surfer pendant des heures sur internet à la recherche d'un bon plan shopping? Marre de penser avoir trouver la meilleure offre et une fois le produit acheté, voir qu'il y a moins cher ailleurs ? Stop ! Vous avez trouvé le site qu'il vous faut, je vous offre tous les meilleurs sites et les meilleurs bons plans du web.">
    <title>Je Dépense Malin sur le Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/stylemain.css">
    <link rel="stylesheet" href="Style/styleheader.css">
    <link rel="stylesheet" href="Style/stylefooter.css">
</head>
<body>
    <?php require('Vue/header.php');?>
    <br/>
    <?php require('Vue/accueil.php');?>
    <?php require('Vue/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="Script/scripts.js "></script>
</body>
</html>