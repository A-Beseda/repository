<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PriemerZnámok</title>
</head>
<body>
    <?php
        $znamky = [2, 3, 1, 1, 2, 1];
        $pocetZnamok = count($znamky);
        $priemerZnamok;
        $znamkySpolu = 0;

        foreach($znamky as $zna){
            $znamkySpolu += $zna;
        }

        $priemerZnamok = $znamkySpolu / $pocetZnamok;

        if($priemerZnamok <= 2){
            echo"Výborný výkon!";
        }else{
            echo"Môžeš sa zlepšiť";
        }

        echo"<br> ===Nákupný zoznam ===<br>";

        
    ?>
</body>
</html>