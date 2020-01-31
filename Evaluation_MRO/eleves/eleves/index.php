<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 16.12.2019
 * Time: 14:23
 */

require "controler/controler.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;

        case 'login' :
            showloginform();
            break;

        case 'logout';

            logout();

            break;


        case 'books' :

            showbooks();

            break;
        case 'verifylogin';

            $username = $_POST["login"];
            $password = $_POST["psw"];

            cklogin($username, $password);

            break;
        case 'newbook';

            addbook();

            break;

        case 'addnewbook';


            $Quantity = $_POST["quantity"];
            $Title = $_POST["title"];
            $State = $_POST["state"];
            $Price = $_POST["price"];


            createonebook($Quantity, $Title, $State, $Price);

            break;


        default :
            home();
            break;
    }
} else {
    home();
}