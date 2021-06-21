<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="header">
        
            <?= headerknoppen(); 
            $section = login();?>

        </div>
        <?= role()?>
    </header>

<main>
<?= logout();?>
</main>
<footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>

</body>