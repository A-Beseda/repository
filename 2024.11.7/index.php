<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
    <title>Trénujeme polia</title>

    <style>
        .pozadie{
            background-color: palevioletred;
        }
    </style>

</head>
<body>
    <?php
        /*$zoznam = ['maslo', 'vajcia', 'chleba', 'mlieko', 'muka'];
        $ceny = [3.5, 2.8, 4.4, 2.5, 3.3];
       
        array_unshift($zoznam, 'soľ');
        array_unshift($ceny, 1.50);
        array_push($zoznam, 'cukor');
        array_push($ceny, 1.20);
 
        echo "<pre>";
        print_r($zoznam);
        echo "</pre>";
 
        echo "<pre>";
        print_r($ceny);
        echo "</pre>";
       
        $pocetTovaru = count($zoznam);
       
        echo "<table border='1' cellpadding='5' cellspacing='2'>";
        echo "<tr><th>Položka</th><th></th><th>Cena (€)</th></tr>";
 
        for ($i = 1; $i < $pocetTovaru+1; $i++) {

            if($i % 2 == 1){
                echo '<tr class="pozadie">';
            }else{
                echo "<tr>";
            }

            echo "<td>" . $zoznam[$i] . "</td>";
            echo "<td>". " ====== " . "</td>";
            echo "<td>". $ceny[$i] . "</td>";

            echo "</tr>";
        }
 
        echo "</table>";*/

        $dniTyzdna = ["Pondelok", "Utorok", "Streda", "Štvrtok", "Piatok", "Sobota", "Nedeľa"];
        $teploty = [13.5, 24.4, 3.2, 5.21, 15.2, 14.8, 10.8];
        $pocetTeplot = count($teploty);
        $priemerTeplot;
        $teplotySpolu = 0;

        foreach ($teploty as $tep) {
            $teplotySpolu += $tep;
        }

        $priemerTeplot = $teplotySpolu / $pocetTeplot;

        echo "<table border='1' cellpadding='5' cellspacing='2'>";
    ?>
</body>
</html>