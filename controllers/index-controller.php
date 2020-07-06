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

$RssChoices = [

    $RssContentsPolitiques,
    $RssContentsPhotos,
    $RssContentsGames,
    $RssContentsSmartphone,
    $RssContentsTechno

];

$Thematique = [

   'Politiques',
   'Photos',
   'Games',
   'Smartphones',
   'Technos'

];

$myChoice1 = 1;
$myChoice2 = 2;
$myChoice3 = 3;


$myChoices = [
    $myChoice1,
    $myChoice2,
    $myChoice3
];

// if (isset($_COOKIE['myChoices'])){
//     $myChoices = explode('/', $_COOKIE['myChoices']);
//     $myChoice1 = $myChoices[0];
//     $myChoice2 = $myChoices[1];
//     $myChoice3 = $myChoices[2]; 
// }
// if (isset($_POST)) {
//     $paramChoices = array();

//     for ($i = 1; $i <= 5; $i++) {
//         $choice = 'choix' . $i;
//         if (isset($_POST[$choice]) && count($paramChoices) <= 3) {
//             array_push($paramChoices, $_POST[$choice]);
//         }
//     }
//     if (count($paramChoices) == 3) {
//         setcookie('myChoices', $paramChoices[0] . '/' . $paramChoices[1] . '/' . $paramChoices[2], time() + 3600);
//         header('Location: index.php');
//         exit;
//     }
// }


$css = "assets/css/styles.css";
$NumberOfArticles = 3;

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["ColorTheme"]) && !empty($_POST["ColorTheme"])) {
        if (isset($_POST["ColorTheme"]) && !empty($_POST["ColorTheme"])) {
            if ($_POST["ColorTheme"] == "ColorBlack") {
                $css = "assets/css/Theme-1.css";
                setcookie("ColorTheme", $css, time() + 3600 * 24, '/');
            } else if ($_POST["ColorTheme"] == "ColorBlue") {
                $css = "assets/css/Theme-2.css";
                setcookie("ColorTheme", $css, time() + 3600 * 24, '/');
            } else if ($_POST["ColorTheme"] == "ColorRed") {
                $css = "assets/css/Theme-3.css";
                setcookie("ColorTheme", $css,  time() + 3600 * 24, '/');
            } else if ($_POST["ColorTheme"] == "ColorDefault") {
                $css = "assets/css/styles.css";
                setcookie("ColorTheme", $css,  time() + 3600 * 24, '/');
            }
        }
    }

    if (isset($_POST["NumberOfArticles"]) && !empty($_POST["NumberOfArticles"])) {
        foreach ($RssContentsPolitiques as $article) {
            $MaxArticles = 0;
            if ($MaxArticles === 3) {
            } else if ($MaxArticles === 5) {
            } else if ($MaxArticles === 8) {
            }
            if ($_POST["NumberOfArticles"] === "3") {
                $NumberOfArticles = intval($_POST["NumberOfArticles"]);
                setcookie("NumberOfArticles", $_POST["NumberOfArticles"],  time() + 3600 * 24, '/');
            } else if ($_POST["NumberOfArticles"] === "5") {
                $NumberOfArticles = intval($_POST["NumberOfArticles"]);
                setcookie("NumberOfArticles", $_POST["NumberOfArticles"],  time() + 3600 * 24, '/');
            } else if ($_POST["NumberOfArticles"] === "8") {
                $NumberOfArticles = intval($_POST["NumberOfArticles"]);
                setcookie("NumberOfArticles", $_POST["NumberOfArticles"],  time() + 3600 * 24, '/');
            }
        }
    }    
}
