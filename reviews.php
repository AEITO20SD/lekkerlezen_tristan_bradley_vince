<main>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "lekkerlezen";

  try {
    if (isset($_GET["bookid"])) {
      $bookid = $_GET["bookid"];
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT bookid, Naam, auteur, descriptie, genre, kaft FROM boek WHERE bookid = :bookid");
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute(array('bookid' => $bookid));
      $result = $stmt->fetchAll();
      ?>
      <div class="center">
        <h2><?php echo "Reviews" ?></h2>
      </div>
      <?php
      foreach ($result as $boek) { ?>
        <div class="container">
          <div class="boekenboxinbox">
            <p><?php echo $boek["Naam"] ?></p>
            <?php echo '<img class="img3"src="data:image/jpeg;base64,'.base64_encode( $boek['kaft'] ).'"/>'; ?>

          </div>
          <div class="boekenbox">
            <p><?php echo $boek["descriptie"] ?></p>
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
      else try
      {
        $naam = $_POST["naam"];
        $bericht = $_POST["bericht"];
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO reviews (Naam, bericht, bookid)
        VALUES ('$naam', '$bericht', '$bookid')";
        $conn->exec($sql);
        echo "Dank u voor uw review.";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

        $conn = null;
    }
    try {
      if (isset($_GET["bookid"])) {
        $bookid = $_GET["bookid"];
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, Naam, bericht, bookid FROM reviews WHERE bookid = :bookid");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array('bookid' => $bookid));
        $result = $stmt->fetchAll();
        foreach ($result as $review) { ?>
          <div class="container">
            <div class="boekenboxinbox">
              <p><?php echo $review["Naam"] ?></p>
            </div>
            <div class="boekenbox">
              <p><?php echo $review["bericht"] ?></p>
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