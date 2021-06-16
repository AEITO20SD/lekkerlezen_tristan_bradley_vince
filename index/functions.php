<?php


function welkom(){
    return "<h1>Welkom bij boekhandel Lekker Lezen.</h1>";
}

function uitgelichtTekst(){
    return "<h2>Uitgelichte boeken:</h2>";
}

function uitgelichtbox(){
    $box = "<img class='img5' src='' alt='Uitgelicht Boek 1'>";
    $box .= "<img class='img5' src='' alt='Uitgelicht Boek 2'>";
    $box .= "<img class='img5' src='' alt='Uitgelicht Boek 3'>";
    $box .= "<img class='img5' src='' alt='Uitgelicht Boek 4'>";

    return $box;
}

function titel(){
    $titel = "Titel: <br> Auteur:";

    return $titel;
}

function waar(){
    return "<h2>Waar kun je ons vinden</h2>";
}

function plaatjeWinkel(){
  return  "<img class='img4' src'' alt='Lekker Lezen Winkel'>";
}

function winkelTekst(){
    return "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium elit id vehicula finibus. Vivamus sollicitudin tortor et mauris tempor pretium. Pellentesque pellentesque egestas faucibus. Aenean nisl elit, commodo in nisi vel, vulputate placerat quam. Morbi mollis euismod quam, at porta elit tincidunt a. Mauris rhoncus quam scelerisque, scelerisque metus vitae, pretium elit. Phasellus et odio finibus nibh gravida ullamcorper id eu sapien. Vivamus et consectetur urna, nec euismod mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend, purus suscipit dictum interdum, est nisi egestas sapien, sed laoreet massa arcu at tortor. Fusce facilisis, magna vitae posuere efficitur, est tellus hendrerit sem, sit amet ullamcorper dui est vel erat.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium elit id vehicula finibus. Vivamus sollicitudin tortor et mauris tempor pretium. Pellentesque pellentesque egestas faucibus. Aenean nisl elit, commodo in nisi vel, vulputate placerat quam. Morbi mollis euismod quam, at porta elit tincidunt a. Mauris rhoncus quam scelerisque, scelerisque metus vitae, pretium elit. Phasellus et odio finibus nibh gravida ullamcorper id eu sapien. Vivamus et consectetur urna, nec euismod mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend, purus suscipit dictum interdum, est nisi egestas sapien, sed laoreet massa arcu at tortor. Fusce facilisis, magna vitae posuere efficitur, est tellus hendrerit sem, sit amet ullamcorper dui est vel erat.";
}

?>