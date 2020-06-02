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
    include("10_7_contenuti.php");
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p> <input type="submit" name="lang" value="IT">
          <input type="submit" name="lang" value="EN">
      </p>
    </form>
      <h1> <?php echo $titolo; ?></h1>
      <ul>
        <li><a href="10_7_Torino.php"><?php echo $to; ?></a></li>
        <li><a href="10_7_Milano.php"><?php echo $mi; ?></a></li>
      </ul>
    <?php
    }
    ?>
  </body>
</html>
