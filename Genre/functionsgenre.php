<?php

function dBconnect(){

 if ( $_SERVER['SERVER_NAME'] == "localhost") {
  DEFINE ( "USER", "root" );
  DEFINE ( "PASSWORD", "" );
  DEFINE ( "HOST", "localhost" );
  DEFINE ( "DBNAME", "Fietsenwinkel" );
}
else {
  DEFINE ( "USER", "s157751" );
  DEFINE ( "PASSWORD", "lekkerlezen" );
  DEFINE ( "HOST", "localhost" );
  DEFINE ( "DBNAME", "s157751_Fietsenwinkel" );
}
try {
  $connstring = "mysql:host=" . HOST . ";dbname=" . DBNAME;
  $conn = new PDO ("$connstring", USER, PASSWORD);
  $conn->setattribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//echo "verbinding gelukt. <br>";

return $conn;

} catch ( PDOexception $e ) {
   echo $e->getmessage();
   echo "kon geen verbinding maken.";
}
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
function getFietsen(){
}

function showFietsen($fietsen){
  }
?>
