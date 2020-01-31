<?php
/**
 * Created BY PhpStorm.
 * Title: Evaluation
 * USER: marwan.alhelo
 * DATE: 31.01.2020
 * Time: 09:22
 */


// tampon de flux stocké en mémoire
ob_start();
$title="SchoolBook2Sell - books";
$books= displayBooks();
?>

    <h1 style="text-align: center">Books</h1>
    <br>

    <table class="table">
        <thead>
        <tr>
            <th>#°</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Title</th>
            <th class="text-center">State</th>
            <th class="text-center">Price</th>



        </tr>
        </thead>

        <tbody >
        <?php foreach ($books as $book) { ?>

            <tr class="">
                <td class="align-middle"><?= $book['quantity'] ?></td>
                <td class="align-middle"><?= $book['title'] ?></td>
                <td class="align-middle"><?= $book['state'] ?></td>
                <td class="align-middle"><?= $book['price'] ?></td>
                <?php if((isset($_SESSION["username"])  ) ){ ?>
                <td><button  type="button"><a href="index.php?action=newbook" style="color: azure"  >ajouter un livre</button>
                <?php }?>

                </td>

            </tr>
<?php }?>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>