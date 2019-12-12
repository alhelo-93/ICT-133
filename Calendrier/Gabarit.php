<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $className ?></title>

</head>
<body>
<div >

        <h1><?= $className ?></h1>

</div>

<?php
/**
 * Created BY PhpStorm.
 * Title: Calendrier
 * USER: marwan.alhelo
 * DATE: 12.12.2019
 * Time: 11:03
 */
?>
<ul>
    <?php
    foreach ($students as $selectedStudent){
        echo "<li>$selectedStudent</li>";
    }

    ?>
</ul>


</body>
</html>






















