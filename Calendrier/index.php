<!DOCTYPE html>
<html lang="en">
<?php
// month in table to get month by number his own number of table ex:[0.1.2.3.4....]
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "Décembre"];
$Selectmonth = $_GET['month'];
$Selectyear = $_GET['year'];
$today = time();


?>

<head>
    <meta charset="UTF-8">
    <?php
    echo "<title>" . "Calendrier : " . $months[$Selectmonth - 1] . "</title>"
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<main>
    <div class="month">
        <h1 style='color : azure'> Calendrier </h1>
        <ul>
            <?php
            echo "<li>" . $months[$Selectmonth - 1] . "</li>";
            ?>
        </ul>
        <?php
        if ($Selectyear == date('Y')) {
            echo "<h1 style='color : azure'>" . "This is current year : " . $Selectyear . "</h1>";
        } else {
            echo "<h1 style='color : azure'>" . $Selectyear . "</h1>";
        }
        ?>
    </div>
    <?php
    $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    ?>
    <div class="weekdays">
        <?php
        echo "<ul>";
        for ($ligne = 0; $ligne < count($days); $ligne++) {
            echo "<li>" . $days[$ligne] . "</li>";
        }
        echo "</ul>";
        ?>
    </div>


    <?php
    // En fonction du mois trouvé on utli

    // change format to yera-month -day
    $month = "2019-$Selectmonth-01";
    //function transfer English textual datetime description into a Unix timestamp
    $thismonth = strtotime($month);
    // day number's of each month of year
    $nbdays = date("t", $thismonth);
    //
    $lastmonth = strtotime("-1 month", $thismonth);

    // day of week of the first of the month ( 1-7)
    $startday = date("N", strtotime($month));
    // day number's of last month from the selected month
    $nblastdays = date("t", $lastmonth);

    // variable for calculate the last days form last week of last month to fill the empty cases before the first day of current month
    $startlastdays = $nblastdays - ($startday - 2);

    // variable for calculate the last days form first week of nest month to fill the empty cases after the last day of current month
    $nextmonth = 7 - ($startday - 1 + $nbdays) % 7;
    ?>
    <div>
        <ul class="days">
            <?php
            // loop to show the days before the currant months
            for ($i = 0; $i < $startday - 1; $i++) {

                echo "<li class='tintbefore'>" . $startlastdays . "</li>";
                $startlastdays++;
            }

            // loop to show all days of the currant month
            $Todaynow = date("j", $today);
            for ($li = 1; $li <= $nbdays; $li++) {
                echo "<li class='verybig'>";
                if ($li == $Todaynow && $Selectyear == date('Y') && $Selectmonth == date('m')) {

                    echo '<span class="active">' . $li . '</span>';

                } else {
                    echo $li;
                }
                echo "</li>";

            }
            ?>

            <?php
            //loop to show the days after current month
            for ($i = 0; $i < $nextmonth; $i++) {
                echo "<li class='tintafter'>" . ($i + 1) . "</li>";
            }

            ?>

        </ul>
    </div>
</main>
</body>
</html>

