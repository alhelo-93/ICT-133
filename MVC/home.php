<?php
/**
 * Created BY PhpStorm.
 * Title: MVC
 * USER: Marwan.ALHELO
 * DATE: 19.12.2019
 * Time: 10:54
 */
ob_start();
?>

    <a href='?action=concerts'><img src="images/movies.jpg" width="300px">Concerts</a>
    <a href='?action=movies'><img src="images/concerts.jpg" width="300px">Movies</a>

<?php
$content = ob_get_clean();
?>