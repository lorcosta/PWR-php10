<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 10_3B</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <h1>Pagina realizzata con PHP</h1>
      <p>Autore della pagina: Lorenzo Costa</p>
      <p>Lettura del cookie "Country"</p>
      <?php
      if(isset($_COOKIE["Country"])){
        echo "<p>".$_COOKIE["Country"]."</p>";
      }else {
        echo "Cookie con nome \"Country\" non trovato</p>";
      }
       ?>
  </body>
</html>
