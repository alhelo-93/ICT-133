<?php
/**
 * Created BY PhpStorm.
 * Title: Evaluation
 * USER: marwan.alhelo
 * DATE: 31.01.2020
 * Time: 09:26
 */



function displayBooks()
{
    return json_decode(file_get_contents("model/data/books2sell.json"), true);
}

function getUsers()
{
    return json_decode(file_get_contents("model/data/users.json"), true);
}


function newonebook($Quantity, $Title, $State, $Price)
{


    $mybook =
        [
            'quantity'=> $Quantity,
            "title" => $Title,
            "state" => $State,
            "price" => $Price,


        ];

    $books[] = $mybook;
    file_put_contents('model/data/newbooks.json', json_encode($books));
    return $books;
}

?>


