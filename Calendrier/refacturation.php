<!DOCTYPE html>
<html lang="en">
<?php
// month in table to get month by number his own number of table ex:[0.1.2.3.4....]
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "Décembre"];
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$Selectmonth = $_GET['month'];
$Selectyear = $_GET['year'];
$today = time();


?>

<head>
    <meta charset="UTF-8">
    <?php
    echo "<title>" . "Calendrier : " . $months[$Selectmonth - 1] . "</title>"
    ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<main>
    <div class="button" id="previous">&lt;</div>
    <div class="button" id="next">&gt;</div>
    <br>
    <br>
    <br>
    <br>

    <?php

    echo getHeader($Selectmonth, $months);
    echo '<h1 class="month" style="color: #dddddd"> ' . $Selectyear . '</h1>';
    echo '<div class="weekdays"><ul>';
    echo  weeks($days);
    echo "</div></ul>";
    echo '<ul class="days">';   //début des jours du mois
    echo getCurrantdays($Selectyear, $Selectmonth);
    echo '</ul>';


    //Fonctions:
    /**
     * La fonction getDaysBefore retourne une chaîne de caractères qui représente les jours du
     * début de la semaine qui précèdent le premier jour du mois donné.
     * Cette chaîne peut donc être vide si le mois choisi commence un lundi.
     * Chaque jour est mis dans une balise <li> qui a la classe CSS 'discreet'
     *
     * Exemple:
     *     Le mois d'avril 2020 commence un mercredi, il est précédé du mois de mars, qui compte 31 jours.
     *     On doit donc voir le lundi 30 mars et le mardi 31 mars avant le mercredi 1er avril
     *     getDaysBefore(4,2020) retournera donc la chaîne:
     *
     *     <li class='discreet'>30</li><li class='discreet'>31</li>
     *
     * @param $month , numérique: le mois à afficher
     * @param $year , numérique: l'année du mois à afficher
     * @return $res , string : listes des jours d'avant
     */
    function getHeader($Selectmonth, $months)
    {
        $res = "";
        $res .= '<div class="month"><ul>';
        $res .= "<li>" . $months[$Selectmonth - 1] . "</li>";
        $res .= "</div></ul>";
        return $res;
    }

    function weeks($days)
    {
        $res = "";
        $res .= '<div class="weekdays"><ul>';
        for ($ligne = 0; $ligne < count($days); $ligne++) {
            echo "<li>" . $days[$ligne] . "</li>";
        }

        $res .= "</div></ul>";
        return $res;
    }

    function getDaysBefore($Selectmonth, $Selectyear)
    {
        $month = "$Selectyear-$Selectmonth-01";
        $thismonth = strtotime($month);
        $lastmonth = strtotime("-1 month", $thismonth);
        $startday = date("N", strtotime($month));
        $nblastdays = date("t", $lastmonth);
        $startlastdays = $nblastdays - ($startday - 2);
        $res = "";
        // loop to show the days before the currant months
        for ($i = 0; $i < $startday - 1; $i++) {

            echo "<li class='tintbefore'>" . $startlastdays . "</li>";
            $startlastdays++;
        }
        return $res;
    }

    function getDaysAfter($Selectyear, $Selectmonth)
    {
        $month = "$Selectyear-$Selectmonth-01";
        $thismonth = strtotime($month);
        $startday = date("N", strtotime($month));
        $nbdays = date("t", $thismonth);
        $nextmonth = 7 - ($startday - 1 + $nbdays) % 7;
        //loop to show the days after current month
        $res = "";
        for ($i = 0; $i < $nextmonth; $i++) {
            echo "<li class='tintafter'>" . ($i + 1) . "</li>";
        }
        return $res;
    }

    function getCurrantdays($Selectyear, $Selectmonth)
    {
        $res = "";
        echo getDaysBefore($Selectmonth, $Selectyear);
        // loop to show all days of the currant month
        $month = "$Selectyear-$Selectmonth-01";
        $thismonth = strtotime($month);
        $nbdays = date("t", $thismonth);
        $Todaynow = date("j", time());

        for ($li = 1; $li <= $nbdays; $li++) {
            echo "<li class='verybig'>";
            if ($li == $Todaynow && $Selectyear == date('Y') && $Selectmonth == date('m')) {

                echo '<span class="active">' . $li . '</span>';

            } else {
                echo $li;
            }
            echo "</li>";
        }
        echo getDaysAfter($Selectyear, $Selectmonth);
        return $res;
    }


    // En fonction du mois trouvé on utli

    // change format to yera-month -day

    //function transfer English textual datetime description into a Unix timestamp

    // day number's of each month of year

    //


    // day of week of the first of the month ( 1-7)

    // day number's of last month from the selected month


    // variable for calculate the last days form last week of last month to fill the empty cases before the first day of current month


    // variable for calculate the last days form first week of nest month to fill the empty cases after the last day of current month


    ?>

</main>
</body>
</html>

