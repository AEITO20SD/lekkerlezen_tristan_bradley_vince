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
        <div class="header">

            <?= headerknoppen(); ?>
        </div>
    </header>

    <main>
        <div class="welkom">
            <?= welkom(); ?>
        </div>

        <div class="uitgelicht">
            <?= uitgelichtTekst(); ?>
            <div class="uitgelicht_box1_images">
                <?= uitgelichtbox(); ?>
            </div>
        </div>
    </main>



    <footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>
</body>