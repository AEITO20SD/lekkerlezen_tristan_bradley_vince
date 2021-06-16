<?php

function dBConnect() {
    
    $servername = "localhost";
    $username = "s151363_lekkerlezen";
    $password = "lekkerlezen";
    $dbname = "s151363_lekkerlezen";
    
    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, Naam, auteur, kaft FROM boek");
    $stmt->execute();
    
    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}



?>