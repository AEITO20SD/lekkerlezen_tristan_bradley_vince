<?php
function dBConnect()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lekkerlezen";

    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




    return $conn;
}

function showBoeken()
{
    $conn = dBConnect();
    $stmt = $conn->prepare("SELECT id, Naam, auteur, descriptie, kaft FROM boek where top_10 = '10'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $x = 0;







    return $result;
}



function headerKnoppen()
{
    $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
    $headerknop .=  "<button class='navigation' onclick='document.location='../index/index.html'>Homepage</button>";
    $headerknop .=  "<button class='navigation' onclick='document.location='genre.php''>Genre</button>";
    $headerknop .= "<button class='navigation' onclick='document.location='top10.php''>Top 10</button>";
    $headerknop .=  "<button class='navigation' onclick='document.location='overons.html''>Over Ons</button>";
    $headerknop .= "<button class='navigation' onclick='document.location='contact.php''>Contact Pagina</button>";

    return $headerknop;
}



function contactbox()
{
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";

    return $footerbox;
}
