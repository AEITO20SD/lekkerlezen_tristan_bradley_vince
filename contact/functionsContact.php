<?php



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




?>