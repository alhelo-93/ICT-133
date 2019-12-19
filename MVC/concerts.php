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

<?php
/* zableau associatiif */
$concerts = [
    ['band' => 'MARZELLA', 'date' => '2019-12-15'],
    ['band' => 'MICHELLE DAVID & THE GOSPEL SESSIONS', 'date' => '2019-12-16'],
    ['band' => 'PENGUIN CAFE', 'date' => '2020-01-18'],
    ['band' => 'FÉFÉ & LEEROY', 'date' => '2020-01-24'],
    ['band' => 'LIDO REVIVAL', 'date' => '2020-01-25'],
    ['band' => 'KEB’ MO’', 'date' => '2020-02-04'],
    ['band' => 'VOYOU + MÉTÉO MIRAGE', 'date' => '2020-02-06'],
    ['band' => 'TRYO', 'date' => '2020-02-07'],
    ['band' => 'OFENBACH (LIVE)', 'date' => '2020-02-08'],
    ['band' => 'STEREOPHONICS', 'date' => '2020-02-09'],
    ['band' => 'CORNEILLE', 'date' => '2020-02-12'],
    ['band' => 'THE GROWLERS', 'date' => '2020-02-13'],
    ['band' => 'DRAGONFORCE', 'date' => '2020-02-16'],
    ['band' => 'BADNAIY', 'date' => '2020-02-20'],
    ['band' => 'BROKEN BACK', 'date' => '2020-02-29'],
    ['band' => 'PATRICK WATSON', 'date' => '2020-03-04']
];

?>
<h1>Liste des Conserts</h1>
<ul>
    <?php

    foreach ($concerts as $concert){
        echo "<li>". $concert['band'] . "<strong> le " . $concert['date'] ."</strong></li>";
    }
    ?>

</ul>
<?php
$content= ob_get_clean();
?>
