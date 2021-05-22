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


?>