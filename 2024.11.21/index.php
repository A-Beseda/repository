<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $celkom = 0;

        echo "<table border='1' cellpadding='7' cellspacing='0' style='text-align: center;'>";
        echo "<tr><th>Súčet</th><th>Pripočítaná hodnota</th></tr>";
        for($i = 1; $i <= 100; $i++){
            echo '<tr>';
            $celkom += $i;
            echo '<td>' . $celkom . '</td> <td> (+' . $i . ')' . '</td></tr>';
        }
        echo '</table>';

        echo '<br> === Náhodné generovanie ===<br>';
        echo '<br>';

        $spolu = 0;
        $pocetGenerovani = 0;
        
        do{
            $nahodne = rand(1,100);
            $spolu += $nahodne;
            echo $spolu . ' (+'. $nahodne . ')' . '<br>';
            $pocetGenerovani += 1;
        } while ($spolu <= 90);

        echo '<br> Vygenerované ' . $pocetGenerovani . 'krát.<br>'
    ?>
</body>
</html>