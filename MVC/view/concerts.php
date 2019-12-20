<?php
/**
 * Created BY PhpStorm.
 * Title: MVC
 * USER: Marwan.ALHELO
 * DATE: 19.12.2019
 * Time: 10:54
 */
$title = 'concerts';
ob_start();


?>
<h1>Liste des Conserts</h1>
<ul>
    <?php

    foreach ($concerts as $concert) {
        echo "<li>" . $concert['band'] . "<strong> le " . $concert['date'] . "</strong></li>";
    }
    ?>

</ul>
<?php
$content = ob_get_clean();
//ajouter pour la fonction de controller
require_once 'gabarit.php';
?>
