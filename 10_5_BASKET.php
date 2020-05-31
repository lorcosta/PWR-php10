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
        if(!isset($_COOKIE["CD"]) || $_COOKIE["CD"]==0){
          echo "NON &EGRAVE STATO SELEZIONATO UN VALORE PER I CD";
          return;
        }elseif (!isset($_COOKIE["DVD"])|| $_COOKIE["DVD"]==0) {
          echo "NON &EGRAVE STATO SELEZIONATO UN VALORE PER I DVD";
          return;
        }elseif (!isset($_COOKIE["SD"])|| $_COOKIE["SD"]==0) {
          echo "NON &EGRAVE STATO SELEZIONATO UN VALORE PER LA SD";
        }elseif (!isset($_COOKIE["USB"])|| $_COOKIE["USB"]==0) {
          echo "NON &EGRAVE STATO SELEZIONATO UN VALORE PER L'USB";
        }elseif (!preg_match($regexp,$_COOKIE["CD"])) {
          echo "IL NUMERO SELEZIONATO DI CD NON &EGRAVE INTERO O POSITIVO";
        }elseif (!preg_match($regexp,$_COOKIE["DVD"])) {
          echo "IL NUMERO SELEZIONATO DI DVD NON &EGRAVE INTERO O POSITIVO";
        }elseif (!preg_match($regexp,$_COOKIE["SD"])) {
          echo "IL NUMERO SELEZIONATO DI SD NON &EGRAVE INTERO O POSITIVO";
        }elseif (!preg_match($regexp,$_COOKIE["USB"])) {
          echo "IL NUMERO SELEZIONATO DI USB NON &EGRAVE INTERO O POSITIVO";
        }
       ?>
      <form name="form" onsubmit="setCookies('cd','dvd','sd','usb')" action="10_5_BASKET.php" method="get">
      <table>
        <th>Prodotto</th><th>Breve descrizione</th><th>Prezzo unitario</th><th>Quantit&agrave desiderata</th>
        <tr>
          <td>CD</td><td>Fantastici CD</td><td>0.5€</td><td><input type="text" id="cd" name="cd" min="0" value=<?php if(isset($_COOKIE["CD"])) echo "".$_COOKIE["CD"]?> step="1" onchange="controlloInput('cd')"></td>
        </tr>
        <tr>
          <td>DVD</td><td>Ottimi DVD</td><td>1€</td><td><input type="text" id="dvd" name="dvd" min="0" value=<?php if(isset($_COOKIE["DVD"])) echo "".$_COOKIE["DVD"]?> step="1" onchange="controlloInput('dvd')"></td>
        </tr>
        <tr>
          <td>Memoria SD</td><td>Velocissima SD</td><td>7.5€</td><td><input type="text" id="sd" name="sd" max="10" value=<?php if(isset($_COOKIE["SD"])) echo "".$_COOKIE["SD"]?> step="1" onchange="controlloInput('sd')"></td>
        </tr>
        <tr>
          <td>Memoria USB</td><td>Capiente USB</td><td>5€</td><td><input type="text" id="usb" name="usb" min="0" value=<?php if(isset($_COOKIE["USB"])) echo "".$_COOKIE["USB"]?> step="1" onchange="controlloInput('usb')"></td>
        </tr>
      </table>
        <input type="button" name="submit" value="Aggiungi al carrello">
        <input type="reset" name="reset" value="Azzera">
        <p id="showCosto"></p>
      </form>
  </body>
</html>
