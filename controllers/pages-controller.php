<?php 

$LienPolitique = "https://www.01net.com/rss/actualites/politique-droits/";
$arrayRss = [
    $RssPolitique = simplexml_load_file($LienPolitique),
];

$rssContents = $RssPolitique->channel->item;


?>