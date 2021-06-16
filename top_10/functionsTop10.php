<?php


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




