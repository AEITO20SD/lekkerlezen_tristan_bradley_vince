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
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/index/'>Homepage</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/Genre/LayoutGenre.php'>Genre</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/top_10/layoutTop10.php'>Top 10</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/over_ons/'>Over Ons</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/contact/'>Contact pagina</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/inlog/'>Inlog pagina</a>";
    return $headerknop;
}



function contactbox()
{
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";

    return $footerbox;
}
