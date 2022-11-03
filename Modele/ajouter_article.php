<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article sur DepenserMalin.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style_admin.css">
    <script src="https://cdn.tiny.cloud/1/qj7j0nufc3ewmuk77itllcnlnkot53bxad5kq4u5a5knykd6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <?php include '../Vue/admin_header.php'; ?>
    <br>
    <h2 class="text-center">Ajouter un Article</h2>
    <br>
    <?php if(isset($_SESSION['save_article'])){
        if($_SESSION['save_article'] == "ok"){
            echo "
            <div class='text-center bg-success text-white'>Votre article a bien été validé !</div>
            ";
            $_SESSION['save_article'] = null;
        }
    }?>
    <form action="../Controleur/save_article.php" method="POST">
        <div class="mx-5 form-floating my-3">
            <input name="titre" class="form-control" placeholder="..." id="floatingInput"></input>
            <label for="floatingInput">Titre de votre article</label>
        </div> 
        <textarea name="article">
        Commencez à écrire votre article...
        </textarea>
        <button class="my-3 btn btn-primary" type="submit">Sauvegarder l'article</button>
    </form>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>