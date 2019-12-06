<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a "Boolean", altrimenti stampare
una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JP php pwd</title>

    <?php

      $pwd = $_GET ["pwd"];
      // echo $pwd;

     ?>

  </head>
  <body>

    <?php

      if ($pwd == "Boolean") {
        echo "<h1 style='color:red'>"."pwd Corretta"."</h1>";
      } else {
        echo "<h1 style='color:blue'>"."pwd Incorretta"."</h1>";
      }

     ?>

  </body>
</html>
