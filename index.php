<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flux - RSS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link " data-toggle="modal" data-target="#myModal" href="#">paramètres</a>
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
      </div>

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="row d-block text-center  p-2 update-actu">
          <h4 class="d-inline-block border-bottom pb-1">Fils D'actualités</h4>
        </div>
      </div>


    </div>


  </div>




  <!-- ===============================================================/actualité============================================================================ -->
  <!-- ===============================================================modal============================================================================ -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">faite votre choix !</h4>
        </div>
        <div class="modal-body">
          <div class="[ form-group ]">
            <label for="color">Couleur du site :</label>
            <select class="form-control" name="color">
              <option selected disabled>--</option>
              <option value="byDefault">Par défaut</option>
              <option value="black">Noir</option>
              <option value="blue">Bleu</option>
              <option value="red">Rouge</option>
              <p>looooool</p>
            </select>
          </div>
          <!-- checkbox -->
          <div class="[ form-group ]">
            <label for="color">Nombre d’articles affichés :</label>
            <select class="form-control" name="color">
              <option selected disabled>--</option>
              <option value="byDefault">Par défaut</option>
              <option value="black">Noir</option>
              <option value="blue">Bleu</option>
              <option value="red">Rouge</option>
            </select>
          </div>
          <!-- checkbox -->
          <div class="[ form-group ]">
            <label for="color">Couleur du site :</label>
            <select class="form-control" name="color">
              <option selected disabled>--</option>
              <option value="byDefault">Par défaut</option>
              <option value="black">Noir</option>
              <option value="blue">Bleu</option>
              <option value="red">Rouge</option>
            </select>
          </div>
        </div>
        <!-- checkbox -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- ===============================================================/modal============================================================================ -->
</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>

</html>