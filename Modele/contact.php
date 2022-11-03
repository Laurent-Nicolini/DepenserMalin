<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aucune hésitation, contactez-nous pour toutes questions sur nos bons plans ou sur l'tilisation de notre site web.">
    <title>Page Contact DepenserMalin.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/stylemain.css">
    <link rel="stylesheet" href="../Style/stylecontact.css">
    <link rel="stylesheet" href="../Style/styleheader.css">
    <link rel="stylesheet" href="../Style/stylefooter.css">
</head>
<body>
    <?php require('../Vue/header.php') ?>

    <main>
        <div class="container-contact">
            <div class="image">
                <img id="image" src="../images/contact.jpg" alt="Contactez-nous">
            </div>
            <div class="contact">
                <h1>Contactez-nous</h1>
                <h4>
                    Si vous souhaitez discuter, râler, proposer un bon plan 
                    (pourquoi pas) ou si vous avez un problème, c'est par ici
                </h4>

                <!-- Retourne un message d'erreur si il manque des informations dans le formulaire -->
                <?php if(array_key_exists('errors',$_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                <?php unset($_SESSION['errors']); endif; ?>

                <!-- Renvoie un message de succès si le message a bien été envoyé -->
                <?php if(array_key_exists('success',$_SESSION)): ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['success']; ?>
                    </div>
                <?php unset($_SESSION['success']); endif; ?>

                <form action="mail.php" id="contact-form" name="contact-form" method="POST">
                    <div class="input">
                        <input type="text" name="name" id="name" placeholder="Entrez votre nom...">
                        <input type="email" name="email" id="email" placeholder="Entrez votre email...">
                    </div>
                    <div class="textarea">
                        <textarea name="message" id="message" rows="auto" cols="auto" placeholder="Ecrivez votre message..."></textarea>
                    </div>
                    <button type="submit">Envoyer mon message</button>
                </form>
            </div>
        </div>
    </main>
    <br>
    <?php require('../Vue/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../Script/scripts.js "></script>
</body>
</html>