<?php
setlocale(LC_TIME, 'french.UTF-8, fr-FR.UTF-8', 'fr.UTF-8', 'fra.UTF-8', 'fr_FR.UTF-8');
date_default_timezone_set('Europe/Paris');

$LienPolitique = "https://www.01net.com/rss/actualites/politique-droits/";
$LienPhoto = "https://www.01net.com/rss/photo/";
$LienGame = "https://www.01net.com/rss/jeux-video/";
$LienSmartphone = "https://www.01net.com/rss/smartphones/";
$LienTechno = "https://www.01net.com/rss/actualites/technos/";

$ArrayRss = [
    $RssPolitique = simplexml_load_file($LienPolitique),
    $RssPhoto = simplexml_load_file($LienPhoto),
    $RssGame = simplexml_load_file($LienGame),
    $RssSmartphone = simplexml_load_file($LienSmartphone),
    $RssTechno = simplexml_load_file($LienTechno),
];

$RssContentsPolitiques = $RssPolitique->channel->item;
$RssContentsPhotos = $RssPhoto->channel->item;
$RssContentsGames = $RssGame->channel->item;
$RssContentsSmartphone = $RssSmartphone->channel->item;
$RssContentsTechno = $RssTechno->channel->item;


if(isset($_GET['choice'])) {
    $RssContents = $ArrayRss[$_GET['choice']]->channel->item;
}

?>