<?php


function getBookByBookid() {

    try {
      if (isset($_GET["bookid"])) 
      {
        $conn = dBConnect();
        $bookid = $_GET["bookid"];
        $stmt = $conn->prepare("SELECT bookid, Naam, auteur, descriptie, genre, kaft FROM boek WHERE bookid = :bookid");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array('bookid' => $bookid));
        $result = $stmt->fetch();
      
        return $result;
      }
    }
      catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;
}

function showBookByBookid($boek) {
        ?>
        <div class="container">
          <div class="boekenboxinbox">
            <p><?php echo $boek["Naam"] ?></p>
            <?php echo '<img class="img3"src="data:image/jpeg;base64,'.base64_encode( $boek["kaft"] ).'"/>'; ?>

          </div>
          <div class="boekenbox">
            <p><?php echo $boek["descriptie"] ?></p>
          </div>
        </div>
        
        
        <?php
}

function addReviewToBook($bookid) {
  try
      {
        $conn = dBConnect();
        $naam = $_POST["naam"];
        $bericht = $_POST["bericht"];
        $sql = "INSERT INTO reviews (Naam, bericht, bookid)
        VALUES ('$naam', '$bericht', '$bookid')";
        $conn->exec($sql);
        echo "Dank u voor uw review.";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

        $conn = null;
    
}

function getReviewsByBookid($bookid) {
  try {
      $conn = dBConnect();
      $stmt = $conn->prepare("SELECT id, Naam, bericht, bookid FROM reviews WHERE bookid = :bookid");
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute(array('bookid' => $bookid));
      $result = $stmt->fetchAll();
    } catch(PDOException $e) {
      echo "<br>" . $e->getMessage();
    }

      $conn = null;

    return $result;
}

function showReviews($reviews){
  foreach ($reviews as $review) { ?>
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
?>