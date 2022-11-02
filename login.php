<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Authentification du Panneau d'Administration DepenserMalin.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/Style/style_admin.css">

</head>
<body>
    
    <br>
    <h2 class="text-center">Bienvenue sur le Panneau d'Administration de DépenserMalin.com</h2>
    <br>
    <h4 class="text-center">Veuillez entrer vos identifiants de connexion</h4>
    <br>

    <!-- Message d'erreur si login ou mot de passe incorrects -->
    <?php if ($_SESSION['error'] == 1){
        echo "
            <div class='text-center bg-danger text-white'>E-mail ou Mot de Passe incorrect, veuillez entrer des identifiants valides.</div><br>
        ";
    }?>

    <!-- Formulaire de connexion au panneau d'administration -->
    <div class="container">
        <form class="text-center" action="/Controleur/valid_login.php" method="POST">
            <div class="form-floating mb-3">
                <input pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com..." aria-describedby="emailHelp" required>
                <label for="floatingInput">E-mail</label>
                <div id="emailHelp" class="form-text text-start">[name@example.com] - Ne partagez jamais vos identifiants avec quelqu'un d'autre.</div>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Entrez votre mot de passe..." aria-describedby="passHelp" required>
                <label for="floatingPassword">Mot de Passe</label>
                <div id="passHelp" class="form-text text-start">Doit comprendre au moins 1 majuscule, 1 minuscule, 1 chiffre, 1 lettre spéciale et avoir une longueur de 12 caractères minimum.</div>
            </div>
            <button class="mt-3 btn btn-primary" type="submit">Je me connecte</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>