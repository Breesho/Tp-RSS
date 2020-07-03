<?php
require_once '../controllers/pages-controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sujet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/<?= $css ?>">
</head>

<body>
    <div class="container-fluid m-auto">
        <?php foreach ($RssContentsPolitiques as $article) { ?>
            <div class="card mb-3" style="max-width: 60%">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $article->enclosure['url']?>" class="card-img" alt="" width="auto" height="auto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article->title ?></h5>
                            <p><?= $article->pubDate ?></p>
                            <a href="<?= $article->link ?>">Lien vers L'article</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php foreach ($RssContentsPhotos as $article) { ?>
            <div class="card mb-3" style="max-width: 60%">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $article->enclosure['url']?>" class="card-img" alt="" width="auto" height="auto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article->title ?></h5>
                            <p><?= $article->pubDate ?></p>
                            <a href="<?= $article->link ?>">Lien vers L'article</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php foreach ($RssContentsGames as $article) { ?>
            <div class="card mb-3" style="max-width: 60%">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $article->enclosure['url']?>" class="card-img" alt="" width="auto" height="auto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article->title ?></h5>
                            <p><?= $article->pubDate ?></p>
                            <a href="<?= $article->link ?>">Lien vers L'article</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>