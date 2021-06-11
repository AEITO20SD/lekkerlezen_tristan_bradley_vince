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

            <?= headerknoppen(); ?>
         <?php   $section = register();?>

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
<p>Als u al een account heeft kunt u hier 
<a href="inlog.php">inloggen</a>
</p>

<footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>
</body>
</html>