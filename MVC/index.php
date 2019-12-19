<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action= 'home';
}

switch ($action)
{
    case 'movies';
        $title = 'Films';
       /* $content= 'Liste des films';*/
    require_once 'movies.php';
        break;

    case 'concerts';
        $title = 'conserts';
        /*$content= 'Liste des Conserts';*/
    require_once 'concerts.php';
        break;

    default ;
        $title = 'HOme';
        require_once 'home.php';
       /* $content= 'Accueil';*/
        break;
}
require_once 'gabarit.php';
?>
