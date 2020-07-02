<?php 
$LienPolitique = "https://www.01net.com/rss/actualites/politique-droits/";
$LienPhoto = "https://www.01net.com/rss/photo/";
$LienJeux = "https://www.01net.com/rss/jeux-video/";

$RssPolitique = simplexml_load_file($LienPolitique);
$RssPhoto = simplexml_load_file($LienPhoto);
$RssJeux = simplexml_load_file($LienJeux);


$CardPolitique = $RssPolitique->channel->item[1];
$CardPhoto = $RssPhoto->channel->item[1];
$CardJeux = $RssJeux->channel->item[1];

$title1 = $CardPolitique->title;
$desc1 = $CardPolitique->description;
$link1 = $CardPolitique->link;
$date1 = $CardPolitique->pubDate;
$img1 =$CardPolitique->enclosure;

$title2 = $CardPhoto->title;
$desc2 = $CardPhoto->description;
$link2 = $CardPhoto->link;
$date2 = $CardPhoto->pubDate;
$img2 = $CardPhoto->enclosure;

$title3 = $CardJeux->title;
$desc3 = $CardJeux->description;
$link3 = $CardJeux->link;
$date3 = $CardJeux->pubDate;
$img3 = $CardJeux->enclosure;


// var_dump($CardPolitique);
// var_dump($CardPhoto);
// var_dump($CardJeux);
echo $title1, $desc1, $link1, $date1, $img1;
echo $title2, $desc2, $link2, $date2, $img2;
echo $title3, $desc3, $link3, $date3, $img3;