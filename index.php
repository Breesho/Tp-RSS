<?php
require_once "controllers/index-controller.php";
// var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flux - RSS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $css ?>">

</head>

<body>

  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4">Super Rss Reader</h1>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav w-100">
        <li class="nav-item">
          <a class="nav-link" href="pages/pages.php?choice=<?= $myChoices[0] ?>"><?= $Thematique[$myChoices[0]] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/pages.php?choice=<?= $myChoices[1] ?>"><?= $Thematique[$myChoices[1]] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="pages/pages.php?choice=<?= $myChoices[2] ?>"><?= $Thematique[$myChoices[2]] ?></a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex justify-content-end">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#modalSetting" href="#">Paramètres</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid" id="actuality">
    <div class=" col-lg-10 row m-auto">

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 id="actuTitle" class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <?php
        $Modal = 1;
        $Article = 0;
        $MaxArticles = $NumberOfArticles;
        foreach ($RssChoices[$myChoices[0]] as $ElementArticle) {
        ?>
          <div class="card mb-3 d-block">
            <div class="row no-gutters" style="min-height: 150px;">
              <div class="col-md-4">
                <img src="<?= $ElementArticle->enclosure['url'] ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $ElementArticle->title ?></h5>
                </div>
              </div>
              <div>
                <a class="nav-link btn-loop m-2" data-toggle="modal" data-target="#Modal-flux1-<?= $Modal++ ?>" href="#">Loupe</a>
              </div>
              <div>
                <a class="nav-link btn-link-article m-2" href="<?= $ElementArticle->link ?>" target="_blank">lien vers article</a>
              </div>
            </div>
          </div>

        <?php
          $Article++;
          if ($Article >= $MaxArticles) {
            break;
          }
        }
        ?>
      </div>

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 id="actuTitle" class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <?php
        $Modal = 1;
        $Article = 0;
        $MaxArticles = $NumberOfArticles;
        foreach ($RssChoices[$myChoices[1]] as $ElementArticle) {
        ?>
          <div class="card mb-3 d-block">
            <div class="row no-gutters" style="min-height: 150px;">
              <div class="col-md-4">
                <img src="<?= $ElementArticle->enclosure['url'] ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $ElementArticle->title ?></h5>
                </div>
              </div>
              <div>
                <a class="nav-link btn-loop m-2" data-toggle="modal" data-target="#Modal-flux2-<?= $Modal++ ?>" href="#">Loupe</a>
              </div>
              <div>
                <a class="nav-link btn-link-article m-2" href="<?= $ElementArticle->link ?>" target="_blank">lien vers article</a>
              </div>
            </div>
          </div>

        <?php
          $Article++;
          if ($Article >= $MaxArticles) {
            break;
          }
        }
        ?>
      </div>

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 id="actuTitle" class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
        <?php
        $Modal = 1;
        $Article = 0;
        $MaxArticles = $NumberOfArticles;
        foreach ($RssChoices[$myChoices[2]] as $ElementArticle) {
        ?>
          <div class="card mb-3 d-block">
            <div class="row no-gutters" style="min-height: 150px;">
              <div class="col-md-4">
                <img src="<?= $ElementArticle->enclosure['url'] ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $ElementArticle->title ?></h5>
                </div>
              </div>
              <div>
                <a class="nav-link btn-loop m-2" data-toggle="modal" data-target="#Modal-flux3-<?= $Modal++ ?>" href="#">Loupe</a>
              </div>
              <div>
                <a class="nav-link btn-link-article m-2" href="<?= $ElementArticle->link ?>" target="_blank">lien vers article</a>
              </div>
            </div>
          </div>

        <?php
          $Article++;
          if ($Article >= $MaxArticles) {
            break;
          }
        }
        ?>
      </div>

      <footer>
          
      </footer>



      <div class="modal fade" id="modalSetting" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="" method="POST" id="Bg-color">
              <div class="modal-header">
                <h4 class="col-12 modal-title text-center bg-light text-black rounded"> Choisissez vos paramètres </h4>
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
                <div class="[ form-group]">
                  <label for="checkCat"> Choix des sujets : </label>
                    <div class="modal-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1" name="choix1" <?= isset($_COOKIE['myChoices']) && in_array(0, $myChoices) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="defaultCheck1">
                                Politiques
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="choix2" <?= isset($_COOKIE['myChoices']) && in_array(1, $myChoices) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="defaultCheck2">
                                Photos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="defaultCheck3" name="choix3" <?= isset($_COOKIE['myChoices']) && in_array(2, $myChoices) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="defaultCheck3">
                               Jeux-Videos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="defaultCheck4" name="choix4" <?= isset($_COOKIE['myChoices']) && in_array(3, $myChoices) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="defaultCheck4">
                              Smartphones
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="defaultCheck5" name="choix5" <?= isset($_COOKIE['myChoices']) && in_array(4, $myChoices) ? 'checked' : '' ?>>
                            <label class=" form-check-label" for="defaultCheck5">
                                Technologie
                            </label>
                        </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary btn-modalparametreclose" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary btn-modalparametrechange" name="btn-submit">Appliquer le changement</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php
      $ModalId = 1;
      foreach ($RssChoices[$myChoices[0]] as $article) {
      ?>
        <div class="modal" id="Modal-flux1-<?= $ModalId++ ?>" tabindex="-1" role="dialog">
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
      foreach ($RssChoices[$myChoices[1]] as $article) {
      ?>
        <div class="modal" id="Modal-flux2-<?= $ModalId++ ?>" tabindex="-1" role="dialog">
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
      foreach ($RssChoices[$myChoices[2]] as $article) {
      ?>
        <div class="modal" id="Modal-flux3-<?= $ModalId++ ?>" tabindex="-1" role="dialog">
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
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a type="button" class="btn btn-primary" href="<?= $article->link ?>">Aller vers article</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>

</html>