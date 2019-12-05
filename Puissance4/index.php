<HTML>
<HEAD>
    <STYLE type="text/css">
        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>

<TABLE>
    <?php
    /**
     * Created BY PhpStorm.
     * Title: Puissance4
     * USER: marwan.alhelo
     * DATE: 29.11.2019
     * Time: 14:46
     */
    for ($ligne = 0; $ligne < 8; $ligne++) // draw one line of the table
    {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            if ($ligne == 7 && $col == 0) {
                echo "<td><img src='bleu.jpg'></td>";
            }elseif (ligne == 7 && $col == 6) {
                echo "<td><img src='rouge.JPG'></td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }

    for ($ligne = 0; $ligne < 8; $ligne++) // draw one line of the table
    {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            if (($col + $ligne) % 2 == 0) {
                echo "<td><img src='bleu.jpg'></td>";
            } else {
                echo "<td><img src='rouge.JPG'></td>";
            }

        }
        echo "</tr>";
    }
    $nameFromQueryString = $_GET['name'];
    $Lastname = $_GET['lastename'];
    echo "Bonjour $nameFromQueryString  $Lastname";
    ?>
</TABLE>
</BODY>
</HTML>






