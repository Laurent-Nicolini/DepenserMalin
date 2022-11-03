<?php

// Fonction pour afficher résumé de l'article
function Tronquer_Texte ($texte) {
	return (strlen($texte) > 300 ? substr(substr($texte,0,300),0,strrpos(substr($texte,0,300)," ")).'...' : $texte);
};

include "Controleur/connexionbdd.php";

$statement = $pdo->prepare(
    "SELECT * FROM articles"
);
$statement->execute();
$requete = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<main>
    
        <section class="container">
            <h2 class="text-center">Derniers Articles mis en ligne</h2>
            <br>
            <?php foreach($requete as $requetes){ $idarticle = $requetes->id; $texte = $requetes->texte;?>
            <div class="container articles">
                <div class="article">
                    <h2><?=$requetes->titre;?></h2>
                    <p>Date: <?=$requetes->date;?> par <?=$requetes->auteur?></p>
                    <div><?=Tronquer_Texte($texte); ?></div>
                </div>
            </div><br>
            <?php } ?>
        </section>
    <br/>
    <aside class="px-2">
        Les liens qui vous amènent vers des sites web extérieurs sont des liens d'affiliation,
        si un site ou un produit vous intéresse vous me donneriez un sacré coup de pouce en passant
        par ces liens, je toucherai (si vous passez une commande) une petite commission qui me 
        permettra de continuer de faire vivre ce site. Par avance, merci !
    </aside>
</main>
