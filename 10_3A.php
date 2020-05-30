<?php
$nomeCookie="Country";
$valoreCookie="IT";
$scadenza=mktime(23,59,59,12,31,2019);
setcookie($nomeCookie,$valoreCookie,$scadenza);
 ?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 10_3A</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <h1>Pagina realizzata con PHP</h1>
      <p>Autore della pagina: Lorenzo Costa</p>
      <p>Questa pagina imposta un cookie con nome "Country" e rimanda ad una seconda pagina che lo legge</p>
      <a href="10_3B.php">Clicca qui per la pagina di lettura del cookie</a>
  </body>
</html>
<!--
-Quali cambiamenti si osservano?
Impostando la data di scadenza del cookie a 31/12/2020 si permette al browser
di tenere traccia del cookie memorizzandolo in locale, perciò una volta chiuso
e riaperto il browser è mantenuta l'informazione sul cookie che è stato creato
accedendo per la prima volta alla pagina A.
Impostando invece la data di scadenza del cookie a 31/12/2019 non si permette
al browser di memorizzare alcuna informazione in quanto la data di scadenza è
antecedente alla data di creazione del cookie. Non verrà mai trovato perchè
il cookie non verrà mai creato.
-->
