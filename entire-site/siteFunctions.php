<?php

function dBConnect() {
    
    // $servername = "localhost";
    // $username = "s151363_lekkerlezen";
    // $password = "lekkerlezen";
    // $dbname = "s151363_lekkerlezen";

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

    return  $conn;
}

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
    $_SESSION['username'] = "";
    $_SESSION['role'] = 0;
}

function userCheck(){
    if($_SESSION['login']){
        $username = $_SESSION['username'];
        $role = $_SESSION['role'];
        $header = " - Welkom: $username ($role)";
    }
    return $header;
    }

function checkRole($role)
{
    if($_SESSION['role']>= $role){
        return true;
    }else {
        return false;
    }
}

function headerKnoppen(){
    $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
    $headerknop .= "<a class='navigation' href='../index/index.php'>Homepage</a>";
    
    $headerknop .= "<a class='navigation' href='../Genre/genreOphalen.php'>Genre</a>";
    
    
    $headerknop .= "<a class='navigation' href='../top_10/top10.php'>Top 10</a>";
    
    $headerknop .= "<a class='navigation' href='../over_ons/over_ons.php'>Over Ons</a>";
    $headerknop .= "<a class='navigation' href='../contact/contact.php'>Contact pagina</a>";
    
    $headerknop .= "<a class='navigation' href='../inlog/inlog.php'>Inloggen</a>";
        if(checkRole(1)){
        $headerknop .= "<a class='navigation' href='../inlog/uitlog.php'>Uitloggen</a>";
        }
    return $headerknop;
}

function role(){
    if(checkRole(1)){
    $rol =  "<div class='welkom'>";
      $rol .=   userCheck();
$rol .= "</div>";
    }
    return $rol;
}






function contactbox(){
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";
    return $footerbox;
}

