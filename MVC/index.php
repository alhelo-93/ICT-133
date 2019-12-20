<?php

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action= 'home';
}
require_once ('Controller/controller.php');
switch ($action)
{
    case 'movies';
        $title = 'Films';
       /* $content= 'Liste des films';*/
    require_once 'view/movies.php';

        break;

    case 'concerts';
        $title = 'conserts';

        showConcerts();

        break;

    default ;
        $title = 'HOme';
        require_once 'view/home.php';

        break;
}


?>
