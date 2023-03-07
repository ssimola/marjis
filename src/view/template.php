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
      <h1><a href="<?=BASEURL?>"><img src="images/logo.jpg"/></a></h1>
    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>&copy; Marjaniemen siirtolapuutarha ry</div>
    </footer>
  </body>
</html>