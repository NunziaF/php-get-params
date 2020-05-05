<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 1 Saluta interlocutore</title>
  </head>
  <?php
    $nome=$_GET["nome"];
    $cognome=$_GET["cognome"];
  ?>
  <body>
    <h1>Ciao <?php echo $nome.' '.$cognome;?>
    </h1>
  </body>
</html>
