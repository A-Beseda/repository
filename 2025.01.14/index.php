<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $spolu = "Adrian Beseda";

    Rozdelenie($spolu);

    function Rozdelenie($spolu){
        for($i = 0; $znak = " "; $i++){
            $znak = $spolu[$i];
            echo $znak;
        }
    }
    ?>
</body>
</html>