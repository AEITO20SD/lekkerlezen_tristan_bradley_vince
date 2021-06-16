<?php




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




?>