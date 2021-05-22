  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "lekkerlezen";

  try {
    if (isset($_GET["id"])) {
      $id = $_GET["id"];
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT id, Naam, auteur, descriptie, genre, kaft FROM boek WHERE id = :id");
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute(array('id' => $id));
      $result = $stmt->fetchAll();
      ?>
      <div class="center">
        <h2><?php echo $id ?></h2>
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