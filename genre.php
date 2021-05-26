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
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "lekkerlezen";

  try {
    if (isset($_GET["genre"])) {
      $genre = $_GET["genre"];
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT bookid, Naam, auteur, descriptie, genre, kaft FROM boek WHERE genre = :genre");
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute(array('genre' => $genre));
      $result = $stmt->fetchAll();
    
      ?>
      <div class="center">
        <h2><?php echo $genre ?></h2>
      </div>
      <?php
      foreach ($result as $boek) { ?>
        <div class="container">
          <div class="boekenboxinbox">
            <p><?php echo $boek["Naam"] ?></p>
            <?php echo '<img class="img3"src="data:image/jpeg;base64,'.base64_encode( $boek['kaft'] ).'"/>'; ?>

          </div>
          <div class="boekenbox">
            <p><?php $id = $boek["bookid"];
            echo $boek["descriptie"] ?></p>
            <p><?php echo "<a href='reviews.php?bookid=$id'>Link to reviews</a>"; ?></p>
          </div>
        </div>
        <?php
      }
    }
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $conn = null;

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
