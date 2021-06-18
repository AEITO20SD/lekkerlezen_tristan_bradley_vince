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
        <div class="welkom">
    <?= userCheck();?>
        </div>
    </header>
    
    <main>
    <div class="contact">
    <h2>Stuur een bericht:<br></h2>
    <form action="" method="post">
      Naam:<br>
      <input type="text" name="naam" style="width:300px;"><br><br>
      E-mail adres:<br>
      <input type="email" name="email" style="width:300px;"><br><br>
      Bericht<br>
      <textarea name="bericht" style="width:99%; height:200px;">
      </textarea><br>
      <input id="submit" name="submit" type="submit">
    </form>
        <?php  contact()?>

        </body>

            

        




    </main>


    <footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>
</body>


</html>