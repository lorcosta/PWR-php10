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
