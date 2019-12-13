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
    <link rel="stylesheet" href="test.css">
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
    $thismonth = strtotime($month);

    $nbdays = date("t", $thismonth);

    $lastmonth = strtotime("-1 month", $thismonth);

    // day of week of the first of the month ( 1-7)
    $startday = date("N", strtotime($month));

    $nblastdays = date("t", $lastmonth);

    $startlastdays = $nblastdays - ($startday - 2);


    $nextmonth = 7 - ($startday -1 + $nbdays) % 7;

    for ($i = 0; $i < $startday - 1; $i++) {

        echo "<li>" . $startlastdays . "</li>";
        $startlastdays++;
    }

    $Todaynow = date("j", $today);
    for ($li = 1; $li <= $nbdays; $li++) {
        echo "<li class='big'>";
        if ($li == $Todaynow) {
            echo '<span class="active">' . $li . '</span>';
        } else {
            echo $li;
        }
        echo "</li>";

    }

    ?>
    <?php
    for($i=0 ; $i < $nextmonth;$i++  ) {
        echo "<li>". ($i +1) ."</li>";
    }
    // faut changer la calss de jours
    ?>

</ul>
</body>
</html>

