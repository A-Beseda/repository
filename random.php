<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asociativne polia</title>
</head>
<body>
    <?php


    $osoba = [
        'meno' => 'Karol', 
        'priezvisko' => 'Košicky',
        'vek' => 45,
        'bydlisko' => 'Trnava',
        'psc' => 97864
    ];

     echo "<pre>";
     echo print_r($osoba);
     echo "</pre>";


     $osoba ['email'] = 'karol@kosicky.sk'; // pridal som novy prvok
     unset($osoba['vek']); //zmazal som vek

     echo "<pre>";
     echo print_r($osoba);
     echo "</pre>";


     $nakupny_zoznam = [  // vnorene asociativne pole do asociativneho pola
        'jablko' => [ 
            'mnozstvo' => 8, 
            'hmotnost' => 150, // v gramoch 
            'cena' => 0.5,
            'zlava' => 50
        ], 
        'banan' => [ 
            'mnozstvo' => 5,     
            'hmotnost' => 120,     
            'cena' => 0.3,
            'zlava' => 32 
        ], 
        'pomaranc' => [ 
            'mnozstvo' => 3, 
            'hmotnost' => 130, 
            'cena' => 0.4,
            'zlava' => 2
        ], 
        'hrozno' => [ 
            'mnozstvo' => 8, 
            'hmotnost' => 200, 
            'cena' => 1.0,
            'zlava' => 32
        ], 
    ]; 
    

    echo '<ul>';

    foreach($nakupny_zoznam as $nazov => $položka) {
        echo '<li>';
        echo 'Nazov ' . $nazov . '<br>';
        echo 'Množstvo =  ' . $položka['mnozstvo'] . ' | Hmotnosť =  ' . $položka['hmotnost'] . ' | Cena =  ' . $položka['cena'] . ' | Zľava =  ' . $položka['zlava'] . '%';
        echo '</li>';
    }

    echo '</ul>';

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Položka</th><th>Množstvo</th><th>Hmotnosť</th><th>Cena</th><th>Zľava</tr>";
    echo "<tr>";

    foreach($nakupny_zoznam as $nazov => $položka) {

        echo "<td>" . $nazov ."</td>";
        echo "<td>". $položka['mnozstvo'] . "ks</td>";
        echo "<td>". $položka['hmotnost'] . "kg</td>";
        echo "<td>". $položka['cena'] . "€</td>";
        echo "<td>". $položka['zlava'] . "%</td>";

        echo "</tr>";
    }
    echo "</table>";
     
    ?>
</body>
</html>