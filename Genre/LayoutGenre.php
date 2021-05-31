<!DOCTYPE html>
<html>

<head>
  <title> Fietsenwinkel </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fietsenwinkel.css">
</head>

<body>
  <?php
  dBconnect()
  ?>
  <div class="header">
  <header><?=getHeader();?></header>
</div>
  <nav><?=getNav();?></nav>
  <div class="main">
    <aside class="asideLeft"><?=getAside('left');?></aside>
    <section><?=getSection();?></section>
    <aside class="asideRight"><?=getAside('right');?></aside>
  </div>
  <div class="footer">
  <footer><?=getFooter();?></footer>
</div>
</body>

</html>
