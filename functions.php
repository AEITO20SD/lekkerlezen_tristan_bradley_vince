<?php
function dBConnect() {

}


function getHeader(){
    $header = "<img class='img1' src='Foto/logo.png' alt='Lekker lezen logo'>";
    $header .=  "<button class='navigation' onclick='document.location='index.html'>Homepage</button>";
    $header .=  "<button class='navigation' onclick='document.location='genre.php''>Genre</button>";
    $header .= "<button class='navigation' onclick='document.location='top10.php''>Top 10</button>";
    $header .= "<button class='navigation' onclick='document.location='top10.php''>Top 10</button>";
    $header .=  "<button class='navigation' onclick='document.location='overons.html''>Over Ons</button>";
    $header .= "<button class='navigation' onclick='document.location='contact.php''>Contact Pagina</button>";

    return $header;
}

function welkom(){
    return "<h1>Welkom bij boekhandel Lekker Lezen.</h1>";
}




function contactbox(){
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606</p>";
    $footerbox .= "<p> E-mail: Lekkerlezen@lezen.nl</p>";
    $footerbox .= "<p> Adres: Lezenstraat 7</p>";

    return $footerbox;
}


?>