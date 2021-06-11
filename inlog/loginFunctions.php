<?php
function dBconnect(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lekkerlezen";
  
    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    return $conn;
  }

  function headerKnoppen(){
    $headerknop = "<img class='img1' src='../Foto/logo.png' alt='Lekker lezen logo'>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/index/'>Homepage</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/Genre/LayoutGenre.php'>Genre</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/top_10/layoutTop10.php'>Top 10</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/over_ons/'>Over Ons</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/contact/'>Contact pagina</a>";
    $headerknop .= "<a class='navigation' href='http://localhost/lekkerlezen_tristan_bradley_vince/inlog/'>Inlog pagina</a>";

    return $headerknop;
}

function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function contactbox(){
    $footerbox = "<h3>Contact:</h3>";
    $footerbox .= "<p> Tel: 06060606 <br> E-mail: Lekkerlezen@lezen.nl <br> Adres: Lezenstraat 7 </p>";
    return $footerbox;
}




if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
    $_SESSION['username'] = "";
    $_SESSION['role'] = 0;
}


function login()
{
    if (isset($_POST['inloggen'])) {
        $username = check_input($_POST['username']);
        $password = check_input($_POST['password']);

        if (checkUserPassword($username, $password)) {
            echo "U bent ingelogd.";
        } else {
            echo "Er is iets fout gegaan tijdens het inloggen";
            
        }
    } else {
        
    }
}

function checkUser($username)
{
    if ($username <> "") {
        $conn = dBConnect();
        $sql = "SELECT * FROM inlog WHERE username='$username'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $users = $stmt->fetchAll();
        foreach ($users as $user) {
            if ($username == $user['username']) {
                return true;
            } else false;
        }
    } else {
        return false;
    }
}

function checkUserPassword($username, $password)
{
    try {
        if (($username <> "") && ($password <> "")) {
            $conn = dBConnect();
            $sql = "SELECT * FROM inlog WHERE username='$username'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $users = $stmt->fetchAll();
            foreach ($users as $user) {
                //print_r($user);
                $passwordHash = $user['password'];
                $passwordHash1 = password_hash($password, PASSWORD_DEFAULT);
                if (password_verify($password, $passwordHash)) {
                    $_SESSION['login'] = true;
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    return true;
                } else {
                    return false;
                }
            }
            $conn = NULL;
        } else {
            return false;
        }
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}


function checkRole($role)
{
}

function register()
{
    if (isset($_POST['register'])) {
        $username = check_input($_POST['username']);

        if (checkUser($username)) {
            echo "gebruiker bestaat al";
        } else {
            $conn = dBConnect();
            $stmt = $conn->prepare("INSERT INTO inlog (username, password, role)
                                VALUES (:username, :password, :role)");


            $username = check_input($_POST['username']);
            $password = check_input($_POST['password']);
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $role = 1;

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $passwordHash);
            $stmt->bindParam(':role', $role);
            $stmt->execute();
            echo "Gebruiker aangemaakt";
            $conn = NULL;
        }
    } else {
        
    }
}

function logout()
{
    $_SESSION['login'] = false;
    $_SESSION['username'] = "";
    $_SESSION['role'] = 0;
    if (!($_SESSION['login'] == true)) {
        echo "u bent uitgelogd";
    } else {
        echo "er is een probleem met uitloggen";
    }
}

?>