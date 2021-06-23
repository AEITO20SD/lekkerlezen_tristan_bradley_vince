<!DOCTYPE HTML>
<html>
<head>
  <meta name="description" content="Lekker Lezen site">
  <title>Lekker Lezen</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header>
  <div class="header">
      <?= headerknoppen(); ?> 
      
      <?php
        $conn = dBConnect(); ?>
        </div>
        <div class="welkom">
    <?= userCheck();?>
        </div>
  </header>
  <main>
      <div class="center">
        <h2><?php echo "Reviews" ?></h2>
      </div>
      <?php
      
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
  $id = $_GET['id'];
    if (isset($_POST['submit']))
    {
      if (empty($_POST["naam"]) or empty($_POST["bericht"]))
      {
          echo "Je hebt nog niet alles ingevuld";
      }
      else
      {
        
      addReviewToBook($id);
      }
    }
    $reviews = getReviewsByBookid($id);
    showReviews($reviews);



    
  ?>
</main>
  <footer>
  
    <div class="contactbox">
    <?= contactbox(); ?>
    </div>
  </footer>
</body>