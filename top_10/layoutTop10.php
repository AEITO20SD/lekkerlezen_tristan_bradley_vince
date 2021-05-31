<!DOCTYPE html>
<html>

<head>
    <title>Lekker Lezen</title>
    <meta name="description" content="Lekker Lezen site">
    <title>Lekker Lezen</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<header>
<?php 
$conn = dBConnect(); ?>
<div class="header">

            <?= headerknoppen(); ?>

        </div>
</header>
<div class="box">
<p>hoi</p>
</div>

<main>
<?php showBoeken() ?>
</main>


<footer>
<div class="contactbox">
<?= contactbox();?>
</div>
</footer>
</body>


</html>