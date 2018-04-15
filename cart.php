<?php
require 'inc/head.php';
if (!isset($_SESSION['loginName'])) {
    header('Location: login.php');
}?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        foreach ($_COOKIE as $cookie) {
        if (strlen($cookie) < 3) {
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail">
                <img src="assets/img/product-<?= $cookie ?>.jpg">
            </figure>
        </div>


    <?php }
    } ?>
    </div>
    <?php
    if (count($_COOKIE) < 2) {

        echo '<h3 class="text-center">Your cart is empty !</h3>';
     } else {
        echo '<div class="row">
                <a href="empty_cart.php" class="btn btn-warning navbar-btn">Empty my cart</a>
              </div>';

     } ?>
</section>

<?php require 'inc/foot.php'; ?>
