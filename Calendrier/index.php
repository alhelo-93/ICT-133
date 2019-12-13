<!DOCTYPE html>
<html lang="en">
<?php
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
$Selectmonth = $_GET['month'];
$Selectyear = $_GET['year'];
$today = time();

?>

<head>

    <meta charset="UTF-8">
    <?php

    echo "<title>" . "Calendrier" . $months[$Selectmonth - 1] . "</title>"
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php

?>
<div class="month">
    <h1 style='color : azure'> Calendrier </h1>
    <ul>
        <?php
        echo "<li>" . $months[$Selectmonth - 1] . "</li>";


        ?>
    </ul>
    <?php

    echo "<h1 style='color : azure'>" . $Selectyear . "</h1>";
    ?>
</div>
<?php
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
?>
<ul class="weekdays">
    <?php

    for ($ligne = 0; $ligne < count($days); $ligne++) {
        echo "<li> $days[$ligne]</li>";
    }
    ?>
</ul>

<ul class="days">

    <?php
    $month = "2019-$Selectmonth-01";

    // En fonction du mois trouvé on utli

    $nbdays = date("t", strtotime($month));
    $lastday= da

    $startday = date("N", strtotime($month));

    for ($i = 0; $i < $startday - 1; $i++) {

        echo "<li>" . "0" . "</li>";

    }


    $Todaynow = date("j", $today);
    for ($li = 1; $li <= $nbdays; $li++) {
        echo "<li>";
        if ($li == $Todaynow) {
            echo '<span class="active">' . $li . '</span>';
        } else {
            echo $li;
        }
        echo "</li>";
    }
    ?>

</ul>
</body>
</html>

