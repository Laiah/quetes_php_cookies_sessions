<?php
/**
 * Created by PhpStorm.
 * User: laiah
 * Date: 12/04/18
 * Time: 10:23
 */
require "inc/head.php";
unset($_SESSION['loginName']);
if (empty($_SESSION)) {
    header('Location: login.php');
}
