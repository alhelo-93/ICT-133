<!DOCTYPE html>
<html lang="en">
<?php
$months=["janvier","février", "mars", "avril", "mai" ,"juin" ,"juillet", "août", "septembre", "octobre", "novembre", "décembre"];
$Selectmonth=$_GET['month'];
$Selectyear =$_GET['year'];
?>

<head>

    <meta charset="UTF-8">
    <?php
    echo "<title>" ."Calendrier" .$months[$Selectmonth-1]  . "</title>"
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php

?>
<div class="month">
    <ul>
        <li>August<br>2017</li>
    </ul>
</div>
<?php
$days=["Lundi","Mardi","Mercredi","Jeudi","Venderdi","Samdi","Dimanche"];
?>
<ul class="weekdays">
    <?php

    for($ligne=0; $ligne< count($days); $ligne++){
    echo "<li> $days[$ligne]</li>";
    }
    ?>
</ul>

<ul class="days">
    <?php
    for($li=1; $li<date('t'); $li++){
        echo "<li> $li </li>";
    }
    ?>

</ul>
</body>
</html>

