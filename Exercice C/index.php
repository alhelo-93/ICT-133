<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>hi</h1>
<?php
/**
 * Created BY PhpStorm.
 * Title: Exercice C
 * USER: marwan.alhelo
 * DATE: 21.11.2019
 * Time: 11:38
 */
$vaule =40;
$step=3;
for($i=0; $i<10; $i++)
{

    if( $vaule >= 30){

        echo "<li>le nombre vaut".$vaule."</li>";

    }else{
        echo "<li>nombre trop petit</li>";
    }
    $value +=$step;

}


?>

</body>
</html>





