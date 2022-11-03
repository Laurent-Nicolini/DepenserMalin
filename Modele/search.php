<?php
session_start();
$search = htmlspecialchars($_POST['search']);

function Tronquer_Texte ($texte) {
	return (strlen($texte) > 300 ? substr(substr($texte,0,300),0,strrpos(substr($texte,0,300)," ")).'...' : $texte);
};

include_once '../Controleur/connexionbdd.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de Recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style_admin.css">
</head>
<body>
    <?php include "../Vue/admin_header.php";?>
    <h2 class="text-center">Résultats de la Recherche: <?= $search ?></h2>
    <?php 
    if((!$search === "") || (!$search === " ")){
        $statement = $pdo->prepare(
            "SELECT * FROM articles WHERE titre LIKE :search"
        );
        $statement->bindValue(":search", "%$search%", PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        if (!empty($result)){
            foreach($result as $results){
                $idarticle = $results->id;
                $titre = $results->titre;
                $texte = $results->texte;
                $date = $results->date;
                $auteur = $results->auteur;?>

                <div class="container articles">
                    <div class="article">
                        <h2><?=$titre;?></h2>
                        <p>Date: <?=$date;?> par <?=$auteur?></p>
                        <div><?=Tronquer_Texte($texte); ?><?="  [Lire la suite...]"?></div>
                    </div>
                </div><br>

            <?php }}else {echo "<br><p class='text-center bg-warning'>Il n'y a aucun résultat pour votre recherche...</p>";}
            } else { echo "<br><p class='text-center bg-warning'>Il n'y a aucun résultat pour votre recherche...</p>";} ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>