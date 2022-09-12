<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2</title>
  </head>
  <body>
    <?php

        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if (strlen($name) > 3 && strpos($mail, ".") != false && strpos($mail, "@") != false && is_numeric($age)) {
            $message = "Accesso Riuscito";
        } else {
            $message = "Accesso negato";
        }
    ?>
    <h1>Inserisci i dati: name, mail, age</h1>
    <p><?php echo $message ?></p>
  </body>
</html>