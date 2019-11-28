
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
 * Title: Date
 * USER: marwan.alhelo
 * DATE: 28.11.2019
 * Time: 10:23
 */
Date_default_timezone_set('Europe/Zurich');
//$timestamp = time();
// for partie 2
//$timestamp =strtotime('28.11.2019');

echo "1) " . date("l j F Y") . "<br>";
echo "2) " . date("D mS \ Y") . "<br>";
echo "3) " . date("d/m/Y h:i:s a ") . "<br>";
echo "4) " . date("d M Y h:i:s ") . "<br>";
echo "5) " . date("D,M Y h:i:s O") . "<br>";
echo "5) " . date("r") . "<br>";


?>

</body>
</html>