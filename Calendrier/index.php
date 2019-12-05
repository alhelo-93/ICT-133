<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="month">
    <ul>
        <li>August<br>2017</li>
    </ul>
</div>

<ul class="weekdays">
    <?php
    for($ligne=0; $ligne< 7; $ligne++){
    for($col=0; $col < 7; $col++){
    echo "<li> test </li>";
    }

    }
    ?>
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
</ul>
<?php
/**
 * Created BY PhpStorm.
 * Title: Calendrier
 * USER: marwan.alhelo
 * DATE: 05.12.2019
 * Time: 11:19
 */
$days=array("Lundi","Mardi","Mercredi","Jeudi","Venderdi","Samdi","Dimanche");


for($ligne=0; $ligne< 7; $ligne++){
    for($col=0; $col < 7; $col++){
        echo "<li> test </li>";
    }

}
echo "</ul>";
echo "<ul>";
for($ligne=0; $ligne< 7; $ligne++){

    echo "<li> test </li>";
}
echo "</ul>";
?>

</body>
</html>

