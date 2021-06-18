<?php




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
    header('Refresh:2; url=../index/index.php');
}


function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
        header('Refresh:2; url=../index/index.php');
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




function regi(){
    
    $regi = "Heeft u nog geen account, dan kunt u zich hier";
    $regi .= " <a href='registreren.php'>registreren</a>";
    
    return $regi;
}