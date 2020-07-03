<?php require_once "controllers/index-controller.php"?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flux - RSS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav w-100">
        <li class="nav-item">
          <a class="nav-link" href="#">sujet - 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">sujet - 2 </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">sujet - 3</a>
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

      <div class="col-12 col-lg-4 m-auto">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <div class="card mb-3 m-auto d-block" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <div class="d-flex justify-content-end">
                  <button><a class="nav-link" data-toggle="modal" data-target="#modalZoom" href="#">Loupe</a></button>
                </div>
                <div class="d-flex justify-content-end">
                  <button>lien vers article</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 m-auto">
        <div class="row d-block text-center p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <div class="card mb-3 m-auto d-block" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 m-auto">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <div class="card mb-3 m-auto d-block" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>


  </div>




  <!-- ===============================================================/actualité============================================================================ -->
  <!-- ===============================================================modal pref============================================================================ -->
  <div class="modal fade" id="modalSetting" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="col-12 modal-title text-center bg-primary text-white rounded">⇩ Choisissez vos paramètres ⇩</h4>
        </div>
        <div class="modal-body">
          <div class="[ form-group ]">
            <label for="color">Couleur du site :</label>
            <select class="form-control" name="color">
              <option selected disabled>--</option>
              <option id="colorGreen" value="colorButton">Par défaut (vert)</option>
              <option id="colorBlack" value="colorButton">Noir</option>
              <option id="colorBlue" value="colorButton">Bleu</option>
              <option id="colorRed" value="colorButton">Rouge</option>
            </select>
          </div>
        </div>
        <div class="modal-body">
          <div class="[ form-group ]">
            <label for="articleNumber">Nombre d’articles affichés :</label>
            <select class="form-control" name="articleNumber">
              <option selected disabled>--</option>
              <option value="three">3</option>
              <option value="five">5</option>
              <option value="eight">8</option>
            </select>
          </div>
        </div>
        <div class="modal-body">
          <div class="[ form-group ]">
            <label for="checkCat">Choix des sujets :</label>
            <ul id="checkCat" class="ulDotRemove">
              <li><input type="checkbox" id="choice1" name="subscribe" value="choix1" checked>
                <label for="subscribeNews">actualites/politique-droits</label></li>
              <li><input type="checkbox" id="choice2" name="subscribe" value="choix2" checked>
                <label for="subscribeNews">photo</label></li>
              <li><input type="checkbox" id="choice3" name="subscribe" value="choix3" checked>
                <label for="subscribeNews">jeux-video</label></li>
              <li><input type="checkbox" id="choice4" name="subscribe" value="choix4">
                <label for="subscribeNews">technos</label></li>
              <li><input type="checkbox" id="choice5" name="subscribe" value="choix5">
                <label for="subscribeNews">smartphones</label></li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary">Appliquer le changement</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============================================================/modal pref============================================================================ -->
  <!-- ===============================================================/modal loop============================================================================ -->
  <div class="modal" id="modalZoom" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="col-12 modal-title text-center">date</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div>
          <p class="col-12 modal-title text-center">titre</p>
        </div>
        <div class="modal-body">
          <p>image</p>
        </div>
        <div>
          <p class="col-12 modal-title text-center">description</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary">Aller vers article</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============================================================/modal loop============================================================================ -->
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>

</html>