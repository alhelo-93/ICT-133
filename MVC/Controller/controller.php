<?php
/**
 * Created BY PhpStorm.
 * Title: MVC
 * USER: Marwan.ALHELO
 * DATE: 20.12.2019
 * Time: 13:39
 */
function showConcerts()
{
    require_once('Model/concerts.php');


    foreach ($concerts as $i => $concert){
        if($concert['date'] < date("Y-m-d")){
            unset($concerts[$i]);
        }
    }

    require_once('view/concerts.php');
}

?>