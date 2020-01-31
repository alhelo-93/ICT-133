<?php
/**
 * Created BY PhpStorm.
 * Title: Evaluation
 * USER: marwan.alhelo
 * DATE: 31.01.2020
 * Time: 09:11
 */

// ajouter la function home
function home()
{

    require_once 'view/home.php';
}

function showbooks()
{

    $books= displayBooks();

    require_once 'view/books.php';
}

function showloginform()
{

    require_once 'view/login.php';
}

function cklogin($username, $password)
{

    // to read all users from json
    $users = getUsers();

    if (isset($username) && isset($password)) {
        // to check each user psw and uname
        foreach ($users as $user) {

            if ($user["user"] == $username && $user["password"] == $password) {

                $_SESSION['username'] = $username;

                $message = ' Welcome ' . $_SESSION["username"] ;

                require_once 'view/loginsuccess.php';

            }
        }
    }

    if (isset($_SESSION['username']) == false) {

        require_once 'view/loginsuccess.php';
    } else {
        $news = getNews();
        require_once 'view/home.php';
    }
    return true;
}

function logout(){
    unset($_SESSION['username']);

    require_once 'view/home.php';

}

function addbook()
{

    require_once 'view/newbook.php';
}
function createonebook($Quantity, $Title, $State, $Price)
{
    if (isset($Quantity)&& isset($Title)&& isset($State)&& isset($Price)){
        newonebook( $Quantity, $Title, $State, $Price);
    }

}
