<?php
session_start();

// Fonction pour afficher résumé de l'article
function Tronquer_Texte ($texte) {
	return (strlen($texte) > 300 ? substr(substr($texte,0,300),0,strrpos(substr($texte,0,300)," ")).'...' : $texte);
};

include "../Controleur/connexionbdd.php";

$statement = $pdo->prepare(
    "SELECT * FROM articles"
);
$statement->execute();
$requete = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les Articles de DépenserMalin.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style_admin.css">
</head>
<body>
    <?php include "../Vue/admin_header.php";?>
    <br>
    <h2 class="text-center">Voir/Modifier tous les Articles</h2>
    <br>
    <?php foreach($requete as $requetes){ $idarticle = $requetes->id; $texte = $requetes->texte;?>
        <div class="container articles">
            <div class="article">
                <h2><?=$requetes->titre;?></h2>
                <p>Date: <?=$requetes->date;?> par <?=$requetes->auteur?></p>
                <div><?=Tronquer_Texte($texte); ?><?="  [<a href='article.php?id=$idarticle'>Lire la suite</a>]"?></div>
            </div>
        </div><br>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
