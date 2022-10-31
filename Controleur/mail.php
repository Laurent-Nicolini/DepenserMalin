<?php
session_start();
$errors = [];

if(!array_key_exists('name',$_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}

if(!array_key_exists('email',$_POST) || $_POST['email'] == ''){
    $errors['email'] = "Vous n'avez pas renseigné votre mail";
}

if(!array_key_exists('message',$_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header('Location: contact.php');
} 
else {
    
    mail('contact@depensermalin.com',"Contact Depensermalin.com",$_POST['message'],$_POST['name'],$_POST['email']);
    $_SESSION['success'] = "Votre message a bien été envoyé ! Merci de nous avoir contacté, nous vous répondrons dans les plus brefs délais.";
    header('Location: contact.php');
}