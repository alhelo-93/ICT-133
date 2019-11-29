<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo time(); ?>
    </title>
</head>
<body>
<h1>hi</h1>

<?php
/**
 * Created BY PhpStorm.
 * Title: temp
 * USER: marwan.alhelo
 * DATE: 29.11.2019
 * Time: 13:37
 */

// TODO : Ecrire le php qui remplace le html dans la balise ul ci-dessous
$tab = array("Simon","Luis","Kevin","Cristopher","Benoit","Migule","Dmitri","David");

For($i=0; $i<count($tab) ; $i++ ){
    echo "<li>". $tab[$i]."</li>";
}


?>

<h1>SI-CMI2a</h1>
</body>
</html>

</body>
</html>