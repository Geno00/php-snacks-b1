<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Snack 7</title>
   </head>
   <body>
        <?php

                $students = [
                [
                    "nome" => "Andrea",
                    "cognome" => "Genovese",
                    "voti" => [10, 8, 9, 10, 7, 6]
                ],
                [
                    "nome" => "Mario",
                    "cognome" => "Rossi",
                    "voti" => [6, 8, 9, 4, 7, 9]
                ],
                [
                    "nome" => "Luca",
                    "cognome" => "Verdi",
                    "voti" => [4,5,8,2,10]
                ]
                ];

        ?>
        <?php foreach($students as $student) ?>
         <ul>
            <li><?php echo "Name: " . $student["nome"] ?></li>
            <li><?php echo "Cognome: " . $student["cognome"] ?></li>
            <li><?php echo "Media: " . array_sum($student["voti"]) / count ($student["voti"]); ?></li>
         </ul>
        <?php ?>


   </body>
</html>