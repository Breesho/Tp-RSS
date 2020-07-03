<?php 

$LienPolitique = "https://www.01net.com/rss/actualites/politique-droits/";
$LienPhoto = "https://www.01net.com/rss/photo/";
$LienGame = "https://www.01net.com/rss/jeux-video/";

$arrayRss = [
    $RssPolitique = simplexml_load_file($LienPolitique),
    $RssPhoto = simplexml_load_file($LienPhoto),
    $RssGame = simplexml_load_file($LienGame),
];

$RssContentsPolitiques = $RssPolitique->channel->item;
$RssContentsPhotos = $RssPhoto->channel->item;
$RssContentsGames = $RssGame->channel->item;

?>