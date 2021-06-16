<?php
function dBConnect()
{

    $servername = "localhost";
    $username = "s151363_lekkerlezen";
    $password = "lekkerlezen";
    $dbname = "s151363_lekkerlezen";

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
    $headerknop .= "<a class='navigation' href='../index/index.php'>Homepage</a>";
    $headerknop .= "<a class='navigation' href='../Genre/genre.php'>Genre</a>";
    $headerknop .= "<a class='navigation' href='../top_10/top10.php'>Top 10</a>";
    $headerknop .= "<a class='navigation' href='../over_ons/over_ons.php'>Over Ons</a>";
    $headerknop .= "<a class='navigation' href='../contact/contact.php'>Contact pagina</a>";
    $headerknop .= "<a class='navigation' href='../inlog/inlog.php'>Inloggen</a>";
    return $headerknop;
}



function contactbox()
{
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";

    return $footerbox;
}
