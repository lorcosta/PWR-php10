<?php
  $session=true;
  if(session_status()==PHP_SESSION_DISABLED){
    $session=false;
  }elseif(session_status()!=PHP_SESSION_ACTIVE){
    session_start();
    if(isset($_REQUEST["lang"]) && ($_REQUEST["lang"]=="IT" || $_REQUEST["lang"]=="EN")){
      $lang=$_SESSION['lang']=$_REQUEST['lang'];
    }elseif (isset($_SESSION['lang'])) {
      $lang=$_SESSION['lang'];
    }else {
      $lang=$_SESSION['lang']='IT';//caso default
    }
    require("10_7_contenuti.php");
  }
 ?>
 <!DOCTYPE html>
 <html lang="it">
   <head>
     <title>Esercizio 10_7</title>
     <meta charset="utf-8">
     <meta name="author" content="Lorenzo Costa" >
     <link rel=stylesheet href=fogliodistile.css>
   </head>
   <body>
     <?php
     if(!$session) echo '<p>Sessioni disabilitate, impossibile continuare</p>';
     else{
       ?>
     <h1><?php echo $to; ?></h1>
     <p><?php echo $toDescrizione; ?> </p>
     <a href="10_7_FIRST.php"><?php echo $back; ?></a>
     <?php
      }
     ?>
   </body>
 </html>
