<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>marjis - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
  </head>
  <body>
  <header>
      <h1><a href="<?=BASEURL?>">marjis</a></h1>
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