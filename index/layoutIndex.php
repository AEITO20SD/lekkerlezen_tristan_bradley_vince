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

            <?= headerKnoppen();?>
            
        </div>
        <div class="welkom">
    <?= userCheck();?>
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
            <div class="uitgelicht_box1_text">
        <div class="titel_en_auteur">
         <?= titel(); ?>
        </div>
        <div class="titel_en_auteur">
        <?= titel(); ?>
        </div>
        <div class="titel_en_auteur">
        <?= titel(); ?>
        </div>
        <div class="titel_en_auteur">
        <?= titel(); ?>
        </div>
        </div>
        </div>
        <div class="winkel">
        <?= waar(); ?>
        <div class="winkel_box1">
        <?= plaatjeWinkel(); ?>
        <div class="winkel_box1_text">
        <?= winkelTekst(); ?>
        </div>
        </div>
        </div>
    </main>



    <footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>
</body>