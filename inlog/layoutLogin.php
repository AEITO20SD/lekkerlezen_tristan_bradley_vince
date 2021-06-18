<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="header">
        
            <?= headerknoppen(); ?>
    
   <?php $section = login();?>

        </div>
        <div class="welkom">
    <?= userCheck();?>
        </div>
    </header>

    <h1>Inloggen</h1>
    <form method="post" action="">
        <label>Username</label>
        <input type="text" name="username" required /><br>

        <label>Password</label>
        <input type="password" name="password" required /><br>
        <input type="submit" name="inloggen" value="Inloggen" />
    </form>
    <p>- - -</p>
    <?= regi()?>
    </p>

    <footer>
        <div class="contactbox">
            <?= contactbox(); ?>
        </div>
    </footer>
</body>

</html>