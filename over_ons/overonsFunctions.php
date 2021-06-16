<?php

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

function overons1(){
    $tekst1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>";

    return $tekst1;
}

function overons2(){
    $tekst2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>";

    return $tekst2;
}

function contactbox()
{
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";

    return $footerbox;
}

?>