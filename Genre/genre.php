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
      <button class="navigation" onclick="document.location='index/index.php'">Homepage</button>
      <button class="navigation" onclick="document.location='genre.php'">Genre</button>
      <button class="navigation" onclick="document.location='top10.php'">Top 10</button>
      <button class="navigation" onclick="document.location='overons.html'">Over Ons</button>
      <button class="navigation" onclick="document.location='contact.php'">Contact Pagina</button>
    </div>
  </header>
  <main>
  <div class="center">
    <h2> Genre </h2>
  </div>
  <div class="container">
    <div class="genre"> </div>
    <div class="genre"> </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genre.php?genre=Biografie"> Biografie </a>
    </div>
    <div class="genre"> <a href="genre.php?genre=Humor"> Humor </a>
    </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genre.php?genre=Literair"> Literaire essay </a>
    </div>
    <div class="genre"> <a href="genre.php?genre=Psychologisch"> Psychologisch verhaal </a>
    </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genre.php?genre=Fictie"> Fictie </a>
    </div>
    <div class="genre"> <a href="genre.php?genre=Historisch"> Historisch verhaal </a>
    </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genre.php?genre=Science Fiction"> Science Fiction </a>
    </div>
    <div class="genre"> <a href="genre.php?genre=Thriller"> Thriller </a>
    </div>
  </div>
  <?php
  include_once("functionsgenre.php");
  dBConnect();

  $books = getBookByGenre();
  showBookByGenre($books);
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
