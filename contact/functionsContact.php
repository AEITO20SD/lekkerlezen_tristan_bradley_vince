<?php

function dBconnect(){

    $servername = "localhost";
    $username = "s151363_lekkerlezen";
    $password = "lekkerlezen";
    $dbname = "s151363_lekkerlezen";

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "lekkerlezen";
    
  
    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    return $conn;
  }


function headerKnoppen(){
    $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
    $headerknop .= "<a class='navigation' href='../index/index.php'>Homepage</a>";
    $headerknop .= "<a class='navigation' href='../Genre/genre.php'>Genre</a>";
    $headerknop .= "<a class='navigation' href='../top_10/top10.php'>Top 10</a>";
    $headerknop .= "<a class='navigation' href='../over_ons/over_ons.php'>Over Ons</a>";
    $headerknop .= "<a class='navigation' href='../contact/contact.php'>Contact pagina</a>";
    $headerknop .= "<a class='navigation' href='../inlog/inlog.php'>Inloggen</a>";

    return $headerknop;
}

function contact(){
  
if (isset($_POST['submit']))
      {
        if (empty($_POST["naam"]) or empty($_POST["email"]) or empty($_POST["bericht"]))
        {
          echo "Je hebt nog niet alles ingevuld";
        }
        else try
        {
          $conn = dBConnect();
          $naam = $_POST["naam"];
          $email = $_POST["email"];
          $bericht = $_POST["bericht"];
          $sql = "INSERT INTO berichten (Naam, Email, vraag)
          VALUES ('$naam', '$email', '$bericht')";
          $conn->exec($sql);
          echo "Dank u voor uw bericht, we zullen u zo spoedig mogelijk helpen.";
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
      }
      
    }

function contactbox(){
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";
    return $footerbox;
}


?>