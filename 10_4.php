<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 10_4</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <h1>Pagina realizzata con PHP</h1>
      <p>Autore della pagina: Lorenzo Costa</p>
      <?php
        $regexp="/^[A-Z]/";
        if(strlen($_COOKIE["Nome"])>30){
          throw new \Exception("Errore: il nome non può essere più lungo di 30 caratteri", 400);
        }elseif(strlen($_COOKIE["Cognome"])>30){
          throw new \Exception("Errore: il cognome non può essere più lungo di 30 caratteri", 400);
        }elseif (!preg_match($regexp,$_COOKIE["Nome"])) {
          throw new \Exception("Errore: il nome deve iniziare con una lettera maiuscola", 400);
        }elseif (!preg_match($regexp,$_COOKIE["Cognome"])) {
          throw new \Exception("Errore: il cognome deve iniziare con una lettera maiuscola", 400);
        }
        if(isset($_COOKIE["Nome"]) && isset($_COOKIE["Cognome"])){
          echo "<p>Bentornato, caro ".$_COOKIE["Nome"]." ".$_COOKIE["Cognome"]." nel mio umile sito";
        }
       ?>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
