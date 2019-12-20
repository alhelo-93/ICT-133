<?php
/**
 * Created BY PhpStorm.
 * Title: MVC
 * USER: Marwan.ALHELO
 * DATE: 19.12.2019
 * Time: 10:53
 */
ob_start();

?>

<?php
$movies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
];

?>

    <h1>Liste des Movies</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Audio</th>
            <th>showtime</th>

        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($movies as $movie) {
            echo "<tr>";
            echo "<td>" . $movie['title'] . "</td>";
            echo "<td>" . $movie['audio'] . "</td>";
            echo "<td>" . $movie['showtime'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>

    </table>
<?php

$content = ob_get_clean();
require_once 'gabarit.php';

?>