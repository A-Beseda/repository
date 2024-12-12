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
        $cenaSpolu = 0;

        foreach($znamky as $zna){
            $znamkySpolu += $zna;
        }

        $priemerZnamok = $znamkySpolu / $pocetZnamok;

        if($priemerZnamok <= 2){
            echo"Výborný výkon!";
        }else{
            echo"Môžeš sa zlepšiť";
        }

        echo"<br>";        
        echo"<br>";
        echo"<hr>";
        echo"<br>";        
        echo"<br>";
        echo"===Nákupný zoznam ===";
        echo"<br>";        
        echo"<br>";
        echo"<br>";

        $nakupny_zoznam = [  
            'Chleba' => [ 
                'mnozstvo' => 2, 
                'cena' => 1.79
            ], 
            'Jogurt' => [ 
                'mnozstvo' => 5,        
                'cena' => 0.89
            ], 
            'Šunka Amálka' => [ 
                'mnozstvo' => 2, 
                'cena' => 1.19
            ], 
            'Šúlance' => [ 
                'mnozstvo' => 1, 
                'cena' => 1.69,
            ], 
            'Maslo' => [ 
                'mnozstvo' => 2, 
                'cena' => 3.49,
            ], 
        ];

        echo "<table border='0' cellpadding='7' cellspacing='0' style='text-align: center;'>";
        echo "<tr><th>Položka</th><th>Množstvo</th><th>Cena</th></tr>";

        echo"<tr>";

        foreach ($nakupny_zoznam as $nazov => $položka) {
            echo "<td>" . $nazov ."</td>";
            echo "<td>". $položka['mnozstvo'] . "ks</td>";
            echo "<td>". $položka['cena'] * $položka['mnozstvo'] . "€</td>";

            echo "</tr>";

            $cenaSpolu += $položka['cena'] * $položka['mnozstvo'];
        }

        echo "<tr>";
        echo "<td>" . "</td>";
        echo "<td style='font-weight: bolder'>". "Cena spolu" ."</td>";
        echo "<td style='font-weight: bolder'>". $cenaSpolu . "€</td>";
        echo "</tr>";

        echo"<tr><td></td></tr>";

        $cena20DPH = $cenaSpolu * 1.20;
        $cena23DPH = $cenaSpolu * 1.23;
        $rozdiel = $cena23DPH - $cena20DPH;

        $DPH20 = $cena20DPH - $cenaSpolu;
        $DPH23 = $cena23DPH - $cenaSpolu;
        
        echo "<tr>";
        echo "<td>" . "</td>";
        echo "<td style='font-weight: bolder'>". "Cena s 20% daňou" ."</td>";
        echo "<td style='font-weight: bolder'>". $cena20DPH . "€</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "</td>";
        echo "<td style='font-weight: bolder'>". "20% daň" ."</td>";
        echo "<td style='font-weight: bolder'>". $DPH20 . "€</td>";
        echo "</tr>";

        
        echo"<tr><td></td></tr>";

        echo "<tr>";
        echo "<td>" . "</td>";
        echo "<td style='font-weight: bolder'>". "Cena s 23% daňou" ."</td>";
        echo "<td style='font-weight: bolder'>". $cena23DPH . "€</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "</td>";
        echo "<td style='font-weight: bolder'>". "23% daň" ."</td>";
        echo "<td style='font-weight: bolder'>". $DPH23 . "€</td>";
        echo "</tr>";

        echo"<tr><td></td></tr>";

        echo "<tr>";
        echo "<td>" . "</td>";
        echo "<td style='font-weight: bolder'>". "Rozdiel" ."</td>";
        echo "<td style='font-weight: bolder'>". $rozdiel . "€</td>";
        echo "</tr>";

        echo "</table>";

    ?>
</body>
</html>