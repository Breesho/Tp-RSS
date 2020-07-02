<?php 
$LienPolitique = "https://www.01net.com/rss/actualites/politique-droits/";
$LienPhoto = "https://www.01net.com/rss/photo/";
$LienJeux = "https://www.01net.com/rss/jeux-video/";

$RssPolitique = simplexml_load_file($LienPolitique);
$RssPhoto = simplexml_load_file($LienPhoto);
$RssJeux = simplexml_load_file($LienJeux);


$CardPolitique = $RssPolitique->channel->item[1];
// $CardPhoto = $RssPhoto->channel->item[1];
// $CardJeux = $RssJeux->channel->item[1];

$title = $CardPolitique->title;
$desc = $CardPolitique->description;
$link = $CardPolitique->link;
$date = $CardPolitique->pubDate;
$img =$CardPolitique->enclosure;

$title = $CardPhoto->title;
$desc = $CardPhoto->description;
$link = $CardPhoto->link;
$date = $CardPhoto->pubDate;
$img = $CardPhoto->enclosure;

$title = $CardJeux->title;
$desc = $CardJeux->description;
$link = $CardJeux->link;
$date = $CardJeux->pubDate;
$img = $CardJeux->enclosure;


var_dump($CardPolitique);
var_dump($CardPhoto);
var_dump($CardJeux);
echo $title, $desc, $link, $date, $img;