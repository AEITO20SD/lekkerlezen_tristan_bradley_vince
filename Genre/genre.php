<!DOCTYPE HTML>
<html>
<head>
  <meta name="description" content="Lekker Lezen site">
  <title>Lekker Lezen</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header>
  <?php 

  ?>
    <div class="header">
      <?= headerknoppen(); ?> 
      
      <?php
        $conn = dBConnect(); ?>
        </div>
        <?= role()?>
    

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
    <div class="genre"> <a href="genreOphalen.php?genre=Biografie"> Biografie </a>
    </div>
    <div class="genre"> <a href="genreOphalen.php?genre=Humor"> Humor </a>
    </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genreOphalen.php?genre=Literair"> Literaire essay </a>
    </div>
    <div class="genre"> <a href="genreOphalen.php?genre=Psychologisch"> Psychologisch verhaal </a>
    </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genreOphalen.php?genre=Fictie"> Fictie </a>
    </div>
    <div class="genre"> <a href="genreOphalen.php?genre=Historisch"> Historisch verhaal </a>
    </div>
  </div>
  <div class="container">
    <div class="genre"> <a href="genreOphalen.php?genre=Science Fiction"> Science Fiction </a>
    </div>
    <div class="genre"> <a href="genreOphalen.php?genre=Thriller"> Thriller </a>
    </div>
  </div>



  <?php
  
  // dBConnect(); //

  $books = getBookByGenre($conn);
  showBookByGenre($books);
  ?>
</main>

  <footer>
    <div class="stickyfooter">
        <?= contactbox(); ?>
    </div>

  </footer>
</body>
