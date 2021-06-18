<!DOCTYPE HTML>
<html>
<head>
  <meta name="description" content="Lekker Lezen site">
  <title>Lekker Lezen</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="header">
      <img class="img1" src="Foto/logo.png" alt="Lekker lezen logo">
      <button class="navigation" onclick="document.location='index.html'">Homepage</button>
      <button class="navigation" onclick="document.location='genre.html'">Genre</button>
      <button class="navigation" onclick="document.location='top10.php'">Top 10</button>
      <button class="navigation" onclick="document.location='overons.html'">Over Ons</button>
      <button class="navigation" onclick="document.location='contact.php'">Contact Pagina</button>
    </div>
    <?= userCheck();?>
  </header>
  <main>
      <div class="center">
        <h2><?php echo "Reviews" ?></h2>
      </div>
      <?php
      include_once("reviewsfunction.php");
      include_once("../entire-site/siteFunctions.php");
  $boek = getBookByBookid();
  showBookByBookid($boek);

  ?>

  
  <form action="" method="post">
    <p>Naam:</p>
    <input type="text" name="naam">
    <p>Bericht:</p>
    <textarea name="bericht"></textarea> <br>
    <input id="submit" type="submit" name="submit">
  </form>

  <?php
    if (isset($_POST['submit']))
    {
      if (empty($_POST["naam"]) or empty($_POST["bericht"]))
      {
          echo "Je hebt nog niet alles ingevuld";
      }
      else
      {
        addReviewToBook($boek{'bookid'});
      }
    }
    $reviews = getReviewsByBookid($boek{'bookid'});
    showReviews($reviews);

  ?>
</main>
  <footer>
    <div class="contactbox">
      <h3>Contact:</h3>
      <p>Tel: 06060606<br>
        E-mail: Lekkerlezen@lezen.nl<br>
        Adres: Lezenstraat 7
      </p>
    </div>
  </footer>
</body>