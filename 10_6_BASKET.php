<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 10_5</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa">
    <link rel=stylesheet href=fogliodistile.css>
    <script>
    "use strict";
    function setCookies(cd,dvd,sd,usb){
      var cd=document.getElementById(cd)
      var dvd=document.getElementById(dvd)
      var sd=document.getElementById(sd)
      var usb=document.getElementById(usb)
      var expires=new Date()
      expires.setMinutes(expires.getMinutes()+30)
      document.cookie="CD="+cd+";expires="+expires.toString()
      document.cookie="DVD="+dvd+";expires="+expires.toString()
      document.cookie="SD="+sd+";expires="+expires.toString()
      document.cookie="USB="+usb+";expires="+expires.toString()
    }
    </script>
  </head>
  <body>
      <h1>Pagina realizzata con PHP</h1>
      <p>Autore della pagina: Lorenzo Costa</p>
      <?php
        $regexp="/^[0-9]+$/";
        /*if(!isset($_COOKIE["CD"]) || $_COOKIE["CD"]==0){
          echo "NON È STATO SELEZIONATO UN VALORE PER I CD";
          return;
        }elseif (!isset($_COOKIE["DVD"])|| $_COOKIE["DVD"]==0) {
          echo "NON È STATO SELEZIONATO UN VALORE PER I DVD";
          return;
        }elseif (!isset($_COOKIE["SD"])|| $_COOKIE["SD"]==0) {
          echo "NON È STATO SELEZIONATO UN VALORE PER LA SD";
        }elseif (!isset($_COOKIE["USB"])|| $_COOKIE["USB"]==0) {
          echo "NON È STATO SELEZIONATO UN VALORE PER L'USB";
        }else*/
        if (!preg_match($regexp,$_COOKIE["CD"])) {
          echo "IL NUMERO SELEZIONATO DI CD NON È INTERO O POSITIVO";
        }elseif (!preg_match($regexp,$_COOKIE["DVD"])) {
          echo "IL NUMERO SELEZIONATO DI DVD NON È INTERO O POSITIVO";
        }elseif (!preg_match($regexp,$_COOKIE["SD"])) {
          echo "IL NUMERO SELEZIONATO DI SD NON È INTERO O POSITIVO";
        }elseif (!preg_match($regexp,$_COOKIE["USB"])) {
          echo "IL NUMERO SELEZIONATO DI USB NON È INTERO O POSITIVO";
        }
        echo "<table><th>Prodotto</th><th>Quantit&agrave</th>";
        if($_COOKIE["CD"]!=0){
          echo "<tr><td>CD</td><td>".$_COOKIE["CD"]."</td></tr>";
        }
        if($_COOKIE["DVD"]!=0){
          echo "<tr><td>DVD</td><td>".$_COOKIE["DVD"]."</td></tr>";
        }
        if($_COOKIE["SD"]!=0){
          echo "<tr><td>SD</td><td>".$_COOKIE["SD"]."</td></tr>";
        }
        if($_COOKIE["USB"]!=0){
          echo "<tr><td>USB</td><td>".$_COOKIE["USB"]."</td></tr>";
        }
        echo "</table>";
        echo "<p>Prezzo totale degli acquisti: ".(($_COOKIE["CD"]*0.5)+($_COOKIE["DVD"])+($_COOKIE["SD"]*7.5)+($_COOKIE["USB"]*5))."</p>";
       ?>
       <p><a href="10_6_PROD.html">Torna alla pagina dei prodotti</a></p>
       <a href="10_6_CHECKOUT.php">
       <button type="submit" name="compra">Compra</button>
       </a>
  </body>
</html>
