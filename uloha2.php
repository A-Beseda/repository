<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
    <title>Trénujeme polia</title>

    <style>
        .pozadie{
            background-color: orange;
        }
    </style>

</head>
<body>
    <?php
        $dniTyzdna = ["Pondelok", "Utorok", "Streda", "Štvrtok", "Piatok", "Sobota", "Nedeľa"];
        $teploty = [13.5, 24.4, 15.2, 13.21, 15.2, 14.8, 10.8];
        $pocetTeplot = count($teploty);
        $priemerTeplot;
        $teplotySpolu = 0;

        echo "<table cellspacing='14'>";
        echo "<tr>";
        for ($i = 0; $i < $pocetTeplot; $i++) {

            if($teploty[$i] > 15){
                echo "<td>" . $dniTyzdna[$i] . "</td>";
                echo '<td class="pozadie">'. $teploty[$i] . "°C </td>";
            }else{
                echo "<td>" . $dniTyzdna[$i] . "</td>";
                echo "<td>". $teploty[$i] . "°C </td>";
            }

            echo "</tr>";
        }
        echo "</table>";
        echo "=====================";

        $maxTeplota = max($teploty);
        $minTeplota = min($teploty);

        echo "<br> Najvyžšia teplota bola " . $maxTeplota;
        echo "<br> Najnižšia teplota bola " . $minTeplota;

        echo"<br> ----------------------------------- <br>";
        
        foreach ($teploty as $tep) {
            $teplotySpolu += $tep;
        }

        $priemerTeplot = $teplotySpolu / $pocetTeplot;


        echo"Priemerná teplota bola ". round($priemerTeplot,2);
    ?>
</body>
</html>
