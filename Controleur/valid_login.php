<?php
session_start();

// Vérification si champs bien remplis
if (isset($_POST['email']) && isset($_POST['password'])){

    // Sécurité pour éviter faille XSS et injection SQL
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $_SESSION['error'] = 0;

    // Connexion Base de Données
    include_once 'connexionbdd.php';
    $statement = $pdo->prepare("SELECT email,password,pseudo FROM admin WHERE email = :email");
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    if ($result){
        foreach($result as $results){
            // Comparaison mot de passe utilisateur et hash en base de données */
            $passhash = $results->password;
            if (password_verify($password, $passhash)){
            //*************************************************************** */
                $_SESSION['pseudo'] = $results->pseudo;
                $_SESSION['error'] = 0;
                header("Location:../admin.php");
                exit();
            } else {
                $_SESSION['error'] = 1;
                header("Location:../login.php");
                exit();
            }
        }

    // Retour page login.php si aucun résultat dans la base de données
    } else {
        $_SESSION['error'] = 1;
        header("Location:../login.php");
        exit();
    }  
    
// Retour page login.php si champs mal remplis
} else {
    $_SESSION['error'] = 1;
    header("Location:../login.php");
    exit();
}
?>