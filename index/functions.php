<?php
function dBConnect() {
    
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
}


function headerKnoppen(){
    $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
    $headerknop .=  "<button class='navigation' onclick='document.location='index.html'>Homepage</button>";
    $headerknop .=  "<button class='navigation' onclick='document.location='genre.php''>Genre</button>";
    $headerknop .= "<button class='navigation' onclick='document.location='top10.php''>Top 10</button>";
    $headerknop .=  "<button class='navigation' onclick='document.location='overons.html''>Over Ons</button>";
    $headerknop .= "<button class='navigation' onclick='document.location='contact.php''>Contact Pagina</button>";

    return $headerknop;
}

function welkom(){
    return "<h1>Welkom bij boekhandel Lekker Lezen.</h1>";
}

function uitgelichtTekst(){
    return "Uitgelichte boeken:";
}

function uitgelichtbox(){
    $box = "<img class='img5' src='' alt='Uitgelicht Boek 1'>";
    $box .= "<img class='img5' src='' alt='Uitgelicht Boek 2'>";
    $box .= "<img class='img5' src='' alt='Uitgelicht Boek 3'>";
    $box .= "<img class='img5' src='' alt='Uitgelicht Boek 4'>";

    return $box;
}


function contactbox(){
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";
    return $footerbox;
}


?>