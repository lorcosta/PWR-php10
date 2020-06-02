<?php
if(isset($_SESSION['lang'])){
  if($_SESSION['lang']=='IT'){
    $titolo='Seleziona una citt&agrave';
    $to='Torino';
    $mi='Milano';
    $toDescrizione='Torino &egrave la citt&agrave pi&ugrave bella del mondo, ha un sacco di abitanti e delle belle piazze.';
    $miDescrizione='Milano &egrave tra le citt&agrave pi&ugrave belle d\'Europa con i suoi giardini e le sue piazze.';
    $back='Indietro';
  }elseif ($_SESSION['lang']=='EN') {
    $titolo='Select a city';
    $to='Turin';
    $mi='Milan';
    $toDescrizione='Turin is the most beatiful city in the world, it has a lots of citizen and lots of squares.';
    $miDescrizione='Milan is one of the most beatiful city in Europe with its gardens and squares and monuments.';
    $back='Back';
  }
}else{
  echo '<p>Errore nella richiesta della pagina, risorsa acceduta in modo imprevisto</p>';
}
 ?>
