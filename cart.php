<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
}

if (isset($_SESSION['add_to_cart'])) {
    $cart = $_SESSION['add_to_cart'];
}

?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($cart as $id => $qty) { ?>
            <ul>
                <li>Produit :<?= $id ?? 'inconnu' ?></li>
                <li>Quantité :<?= $qty ?? 'inconnu' ?></li>
            </ul>
        <?php } ?> 
    </div>
</section>
<?php require 'inc/foot.php'; ?>
