<?php
/**
 * Created BY PhpStorm.
 * Title: Evaluation
 * USER: marwan.alhelo
 * DATE: 31.01.2020
 * Time: 10:17
 */

?>


// tampon de flux stocké en mémoire
ob_start();
$title="SchoolBook2Sell - Login";

?>

    <div class="container">
        <form class="form" method="POST" action="?action=verifylogin">
            <div class="row">
                <div class="service">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center">
                            <h2>Services</h2>
                            <p>Connectez-vous pour accéder à vos données</p>
                            <div class="col-md-6">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                                    <h4>Login</h4>
                                    <div class="icon">
                                        <i class="fa fa-user fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input class="form-control" placeholder="login" type="text" name="login">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <h4>Mot de passe</h4>
                                    <div class="icon">
                                        <i class="fa fa-ellipsis-h fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input  class="form-control" placeholder="mot de passe" type="password" name="psw">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <div class="ficon">
                                        <input type="submit" class="btn btn-primary" value="Connexion">
                                    </div>
                                </div>
                            </div>
        </form>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
