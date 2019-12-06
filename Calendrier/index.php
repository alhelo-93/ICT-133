<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"Calendrier"</title>
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
$days=array("Lundi","Mardi","Mercredi","Jeudi","Venderdi","Samdi","Dimanche");
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

