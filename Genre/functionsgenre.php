<?php

function dBconnect(){

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

 catch ( PDOexception $e ) {
   echo $e->getmessage();
   echo "kon geen verbinding maken.";
}

function getHeader(){
return "dit is de header";
}
function getFooter(){
  return "dit is de footer";
  }
function getNav (){
      <img class="img1" src="Foto/logo.png" alt="Lekker lezen logo">
      <button class="navigation" onclick="document.location='index.html'">Homepage</button>
      <button class="navigation" onclick="document.location='genre.html'">Genre</button>
      <button class="navigation" onclick="document.location='top10.php'">Top 10</button>
      <button class="navigation" onclick="document.location='overons.html'">Over Ons</button>
      <button class="navigation" onclick="document.location='contact.php'">Contact Pagina</button>

return $menu;
}
function getAside(){}

function getPage(){

 }
 return $page;
}
function getSection(){

 }
 return $section;
}

?>
