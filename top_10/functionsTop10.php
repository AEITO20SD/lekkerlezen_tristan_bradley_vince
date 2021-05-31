<?php
function dBConnect()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lekkerlezen";

    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, Naam, auteur, kaft FROM boek");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $conn;
}

function showBoeken(){
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
 }
}

function headerKnoppen()
{
    $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
    $headerknop .=  "<button class='navigation' onclick='document.location='index.html'>Homepage</button>";
    $headerknop .=  "<button class='navigation' onclick='document.location='genre.php''>Genre</button>";
    $headerknop .= "<button class='navigation' onclick='document.location='top10.php''>Top 10</button>";
    $headerknop .=  "<button class='navigation' onclick='document.location='overons.html''>Over Ons</button>";
    $headerknop .= "<button class='navigation' onclick='document.location='contact.php''>Contact Pagina</button>";

    return $headerknop;
}



function contactbox(){
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";

    return $footerbox;
}
