<!DOCTYPE html>
<html>

<head>
    <title>Lekker Lezen</title>
    <meta name="description" content="Lekker Lezen site">
    <title>Lekker Lezen</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<header>
<?php 
$conn = dBConnect(); ?>
<div class="header">

            <?= headerknoppen(); ?>

        </div>
</header>


<main>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lekkerlezen";
  
  $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, Naam, auteur, descriptie, kaft FROM boek");
  $stmt->execute();
  
  // set the resulting array to associative
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
</header>

<body>
  
</head>

<body>
  <?php


  $x = 0;

  foreach ($result as $boek) { ?>
    <div class="container">
      <div class="boekenboxinbox">
        <?php $x++;
        echo "$x: <br>";
        
        ?>
        <p><?php echo  $boek["Naam"] ?></p>
        <?php echo '<img class="img3"src="data:image/jpeg;base64,' . base64_encode($boek['kaft']) . '"/>'; ?>

      </div>
      <div class="boekenbox">
        <p><?php echo $boek["descriptie"] ?></p>

      </div>
    </div>
  <?php }
  ?>
</main>


<footer>
<div class="contactbox">
<?= contactbox();?>
</div>
</footer>
</body>


</html>