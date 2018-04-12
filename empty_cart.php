<?php
/**
 * Created by PhpStorm.
 * User: laiah
 * Date: 12/04/18
 * Time: 14:49
 */

require "inc/head.php";

foreach ($_COOKIE as $cookie) {
    if (strlen($cookie) < 3) {
        setcookie('cart'. $cookie, "$cookie", time() -3600);
    }

}
header('Location: cart.php');