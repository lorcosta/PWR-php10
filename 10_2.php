<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 10_2</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <h1>Pagina realizzata con PHP</h1>
      <p>Autore della pagina: Lorenzo Costa</p>
      <p>Questa pagina legge i cookie del browser</p>
      <table>
        <tr>
          <th>Numero totale di cookie trovati:</th>
          <th><?php echo "".sizeof($_COOKIE); ?></th>
        </tr>
        <?php
        foreach ($_COOKIE as $key => $value) {
          echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
        }
        ?>
      </table>
  </body>
</html>
<!--
E’ possibile visualizzare i cookie di altri siti web? Perché?
Visualizzando altre pagine web (es. libero.it, polito.it) e poi ritornando
sulla pagina 10_2.php non è possibile visualizzare i cookie degli altri
siti web poichè gli altri siti web impostano come dominio al quale inviare
il cookie che si possiede solo quello che risponde ai server di quel dominio.
Se invece il valore del dominio non è settato è il browser stesso che imposta
come valore di default di dominio, il dominio del server dal quale ha
ricevuto il cookie. Perciò se la richiesta di ricevere cookie arriva da un
dominio diverso rispetto a quello presente all'interno del cookie
esso non verrà inviato per motivi di sicurezza altrimenti chiunque potrebbe
accedere a tutti i cookie presenti su un client.
-->
