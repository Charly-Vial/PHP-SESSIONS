<?php
require 'inc/head.php';
?>

<section class="cookies container-fluid">
    <div class="row">
<!--        TODO : Display shopping cart items from $_SESSION here.-->
        <ul>
        <?php
        if (empty($_SESSION['cart'])) {
            echo '<h1> Empty cart ! </h1>';
        }

        foreach ($_SESSION['cart'] as $cake) {
            echo "<li> {$cake['name']} {$cake['description']} </li>";
        }
            ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
