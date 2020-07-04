<?php
require_once "controllers/index-controller.php"
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flux - RSS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="<?= $css ?>">

</head>

<body>

  <!-- ===============================================================header============================================================================ -->
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4">Super Rss Reader</h1>
    </div>
  </div>
  <!-- ===============================================================/header============================================================================ -->
  <!-- ===============================================================navbar============================================================================ -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav w-100">
        <li class="nav-item">
          <a class="nav-link" href="pages/pages.php?choice=1">sujet - 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/pages.php?choice=2">sujet - 2 </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="pages/pages.php?choice=3">sujet - 3</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex justify-content-end">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#modalSetting" href="#">Paramètres</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- ===============================================================/navbar============================================================================ -->
  <!-- ===============================================================actualité============================================================================ -->
  <div class="container-fluid" id="actuality">
    <div class="row m-auto d-flex justify-content-around">

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <?php
         $modal = 1;
         $MaxArticles = 0;
          foreach ($RssContentsPolitiques as $article) { 
            for ($MaxArticles ; $MaxArticles < $NumberOfArticles; $MaxArticles++) {
          ?>
            <div class="card mb-3 d-block">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= $article->enclosure['url'] ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?= $article->title ?></h5>
                    <div class="d-flex justify-content-end">
                      <a class="nav-link" data-toggle="modal" data-target="#ModalPolitiques<?= $modal++ ?>" href="#">Loupe</a>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="<?= $article->link ?>" target="_blank">lien vers article</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <?php
         $modal = 1;
         $MaxArticles = 0;
          foreach ($RssContentsPhotos as $article) { 
            for ($MaxArticles ; $MaxArticles < $NumberOfArticles; $MaxArticles++) {
          ?>
          <div class="card mb-3   d-block">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?= $article->enclosure['url'] ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $article->title ?></h5>
                  <div class="d-flex justify-content-end">
                    <a class="nav-link" data-toggle="modal" data-target="#ModalPhotos<?= $modal++ ?>" href="#">Loupe</a>
                  </div>
                  <div class="d-flex justify-content-end">
                    <a href="<?= $article->link ?>" target="_blank">lien vers article</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php } ?>
      </div>

      <div class="col-12 col-lg-4  ">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <?php
         $modal = 1;
         $MaxArticles = 0;
          foreach ($RssContentsGames as $article) { 
            for ($MaxArticles ; $MaxArticles < $NumberOfArticles; $MaxArticles++) {
          ?>
          <div class="card mb-3  d-block">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?= $article->enclosure['url'] ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $article->title ?></h5>
                  <div class="d-flex justify-content-end">
                    <a class="nav-link" data-toggle="modal" data-target="#ModalGames<?= $modal++ ?>" href="#">Loupe</a>
                  </div>
                  <div class="d-flex justify-content-end">
                    <a href="<?= $article->link ?>" target="_blank">lien vers article</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>




  <!-- ===============================================================/actualité============================================================================ -->
  <!-- ===============================================================modal pref============================================================================ -->
  <div class="modal fade" id="modalSetting" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="index.php" method="POST">
          <div class="modal-header">
            <h4 class="col-12 modal-title text-center bg-primary text-white rounded">⇩ Choisissez vos paramètres ⇩</h4>
          </div>
          <div class="modal-body">

            <div class="[ form-group ]">
              <label for="ColorTheme">Couleur du site :</label>
              <select class="form-control" name="ColorTheme" id="ColorTheme">
                <option value="ColorDefault">Par défaut</option>
                <option value="ColorBlack">Noir</option>
                <option value="ColorBlue">Bleu</option>
                <option value="ColorRed">Rouge</option>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <div class="[ form-group ]">
              <label for="NumberOfArticles">Nombre d’articles affichés :</label>
              <select class="form-control" name="NumberOfArticles" id="NumberOfArticles">
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="8">8</option>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <div class="[ form-group ]">
              <label for="checkCat">Choix des sujets :</label>
              <ul id="checkCat" class="ulDotRemove">
                <li><input type="checkbox" id="PolitiquesCheck" name="subscribe" value="<?$LienPolitique?>">
                  <label for="subscribeNews">actualites/politique-droits</label></li>
                <li><input type="checkbox" id="PhotosCheck" name="subscribe" value="<?$LienPhoto?>">
                  <label for="subscribeNews">photo</label></li>
                <li><input type="checkbox" id="GamesCheck" name="subscribe" value="<?$LienGame?>">
                  <label for="subscribeNews">jeux-video</label></li>
                <li><input type="checkbox" id="TechnosCheck" name="subscribe" value="<?$LienSmartphone?>">
                  <label for="subscribeNews">technos</label></li>
                <li><input type="checkbox" id="SmartphonesCheck" name="subscribe" value="<?$LienTechno?>">
                  <label for="subscribeNews">smartphones</label></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary" name="Submit">Appliquer le changement</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- ===============================================================/modal pref============================================================================ -->
  <!-- ===============================================================/modal loop============================================================================ -->
  <?php
  $ModalId = 1;
  foreach ($RssContentsPolitiques as $article) {
  ?>
    <div class="modal" id="ModalPolitiques<?= $ModalId++ ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="col-12 modal-title text-center"><?= strftime('%c', strtotime($article->pubDate)) ?></h5>
          </div>
          <div>
            <p class="col-12 modal-title text-center"><?= $article->title ?></p>
          </div>
          <div class="modal-body">
            <img src="<?= $article->enclosure['url'] ?>" class="card-img" alt="...">
          </div>
          <div>
            <!-- <p class="col-12 modal-title text-center"><?= $article->description ?></p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <a type="button" class="btn btn-primary" href="<?= $article->link ?>">Aller vers article</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <?php
  $ModalId = 1;
  foreach ($RssContentsPhotos as $article) {
  ?>
    <div class="modal" id="ModalPhotos<?= $ModalId++ ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="col-12 modal-title text-center"><?= strftime('%c', strtotime($article->pubDate)) ?></h5>
          </div>
          <div>
            <p class="col-12 modal-title text-center"><?= $article->title ?></p>
          </div>
          <div class="modal-body">
            <img src="<?= $article->enclosure['url'] ?>" class="card-img" alt="...">
          </div>
          <div>
            <!-- <p class="col-12 modal-title text-center"><?= $article->description ?></p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <a type="button" class="btn btn-primary" href="<?= $article->link ?>">Aller vers article</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <?php
  $ModalId = 1;
  foreach ($RssContentsGames as $article) {
  ?>
    <div class="modal" id="ModalGames<?= $ModalId++ ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="col-12 modal-title text-center"><?= strftime('%c', strtotime($article->pubDate)) ?></h5>
          </div>
          <div>
            <p class="col-12 modal-title text-center"><?= $article->title ?></p>
          </div>
          <div class="modal-body">
            <img src="<?= $article->enclosure['url'] ?>" class="card-img" alt="...">
          </div>
          <div>
            <!-- <p class="col-12 modal-title text-center"><?= $article->description ?></p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <a type="button" class="btn btn-primary" href="<?= $article->link ?>">Aller vers article</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <!-- ===============================================================/modal loop============================================================================ -->
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>

</html>