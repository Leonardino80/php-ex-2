<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php -ex-2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Stampare una stringa verde se la
    variabile password passata in GET è
    uguale a “Boolean”, altrimenti stampare
    una stringa rossa. -->

    <?php
      $password = $_GET['password'];
      $lowPsw = strtolower($password);
      if (strlen($password) != 0) {
        if($password == 'Boolean') {
          echo '<p><font color="red">OK PASSWORD</font></p>';
        } else {
          echo '<p><font color="red">ERRORE PASSWORD</font></p>';
        }
      } else{
        echo '<p>PASSWORD MANCANTE</p>';
      }
    ?>

  </body>
</html>
