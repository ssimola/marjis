<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>marjis - <?=$this->e($title)?></title>
    <meta charset="UTF-8">
    <link href="styles/styles.css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
  </head>
  <body>
  <header>
      <h1><a href="<?=BASEURL?>">marjis</a></h1> 
      <div class="profile">
        <?php
          if (isset($_SESSION['user'])) {
            echo "<div>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          }
        ?>
      </div>
    </header>
    <nav>
    <div>
         <a href="<?=BASEURL."/talkoot"?>">Talkoot </a>
         <a href="<?=BASEURL."/kartta"?>">Kartta </a>
         <a href="<?=BASEURL."/yhteystiedot"?>">Yhteystiedot </a>
      </nav> 
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>&copy; Marjaniemen siirtolapuutarha ry</div>
    </footer>
  </body>
</html>