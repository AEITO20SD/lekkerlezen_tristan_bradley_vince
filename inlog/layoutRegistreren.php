<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <?php
        $conn = dBConnect(); ?>
        <div class="header">

            <?php headerknoppen(); 
            $section = register();?>

        </div>
    </header>
<h1>Registreren</h1>
<form method="post" action="">
<label>Username</label>
<input type="text" name="username" required/><br>

<label>Password</label>
<input type="password" name="password" required/><br>
<input type="submit" name="register" value="register" />
</form>
<p>- - -</p>
<p>Als u al een account heeft kunt u hier inloggen.</p>
<a href="http://localhost/lekkerlezen_tristan_bradley_vince/inlog/layoutLogin.php">inloggen</a>
</p>

<footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>
</body>
</html>