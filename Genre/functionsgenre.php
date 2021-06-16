<?php

function dBconnect()
{
  try {


    $servername = "localhost";
    $username = "s151363_lekkerlezen";
    $password = "lekkerlezen";
    $dbname = "s151363_lekkerlezen";

    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function headerknoppen()
{
  $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
  $headerknop .= "<a class='navigation' href='../index/index.php'>Homepage</a>";
  $headerknop .= "<a class='navigation' href='../Genre/genre.php'>Genre</a>";
  $headerknop .= "<a class='navigation' href='../top_10/top10.php'>Top 10</a>";
  $headerknop .= "<a class='navigation' href='../over_ons/over_ons.php'>Over Ons</a>";
  $headerknop .= "<a class='navigation' href='../contact/contact.php'>Contact pagina</a>";
  $headerknop .= "<a class='navigation' href='../inlog/inlog.php'>Inloggen</a>";

  return $headerknop;
}

function getBookByGenre()
{
  try {
    if (isset($_GET["genre"])) {
      $conn = dBConnect();
      $genre = $_GET["genre"];
      $stmt = $conn->prepare("SELECT id, Naam, auteur, descriptie, genre, kaft FROM boek WHERE genre = :genre");
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute(array('genre' => $genre));
      $result = $stmt->fetchAll();
      return $result;
    }
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $conn = null;
}

function showBookByGenre($books)
{
  if (isset($_GET["genre"])) {
?>
    <div class="center">
      <h2><?php echo $_GET["genre"] ?></h2>
    </div>
    <?php
  }
  if (isset($books)) {
    foreach ($books as $boek) { ?>
      <div class="container">
        <div class="boekenboxinbox">
          <p><?php echo $boek["Naam"] ?></p>
          <?php echo '<img class="img3"src="data:image/jpeg;base64,' . base64_encode($boek['kaft']) . '"/>'; ?>

        </div>
        <div class="boekenbox">
          <p><?php $id = $boek["id"];
              echo $boek["descriptie"] ?></p>
          <p><?php echo "<a href='reviews.php?id=$id'>Link to reviews</a>"; ?></p>
        </div>
      </div>
<?php
    }
  }
}

function contactbox()
{
  $footerbox = "<h3>Contact:</h3>";
  $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";
  return $footerbox;
}


?>