<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <?php

        $arrayNumeri = array();

        for($i = 0; $x < 15; $i++){
            $controllo = true;

            while($controllo){
                $numero = rand(0,300);
                if(!in_array($numero, $arrayNumeri)){
                    $arrayNumeri[] = $numero;
                    $controllo = false;
                }
            }
        }
    ?>

    <div>
        <?php echo $arrayNumeri; ?>
    </div>
</body>
</html>