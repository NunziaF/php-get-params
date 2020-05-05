<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 2 Validità mail</title>
  </head>
  <?php
    $mail = $_GET["mail"];
    $haChiocciola = strpos($mail, "@");
    $haPunto = strpos($mail, ".");
  ?>
  <body>
   <div>
     <h1>
       <?php
         if($haChiocciola === false || $haPunto === false)  {
           echo "la mail non è valida: KO";
         } else {
           echo "la mail è valida: OK";
         }
       ?>
     </h1>
   </div>
  </body>
</html>
