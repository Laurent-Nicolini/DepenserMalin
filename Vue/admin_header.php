
<nav class="navbar sticky-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="col">
        <img src="../Images/logo_depensermalin.png" alt="Dépenser Malin, le site qui vous fait faire des économies sur votre shopping en ligne" title="DépenserMalin.com" width="80px" height="80px">
        <a class="navbar-brand" href="../admin.php">DépenserMalin</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/Modele/ajouter_article.php">Ajouter un article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Modele/all_articles.php">Voir/Modifier un article</a>
        </li>
      </ul>
      <div class="row">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="d-flex justify-content-end">
          <a class="text-end mt-2" href="http://depensermalin/index.php" target="_blank">Voir le site</a>
        </div>
        <div class="d-flex justify-content-end">
          <a class="text-end mt-2" href="/Controleur/deconnexion.php">Deconnexion</a>
        </div>
      </div>
    </div>
  </div>
</nav>