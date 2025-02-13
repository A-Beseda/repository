<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pozadie{
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <?php
        // $prva = 1;
        // $druha = "dva";
        // $tretia = 2.25;
        // $stvrta = true;

        // echo $prva . " " . $druha . " " . $tretia . " " . $stvrta;

    //     $i = 97;

    //     for($i = 97; $i <= 150; $i++){
    //         echo chr($i);
    //     }
    /*$osoby = [
        'Laco Lučenič' => [
            'trieda' => '4.C'
        ],
        'Marek Brezovský' => [
            'trieda' => '9.A'
        ],
        'Rišo Muller' => [
            'trieda' => '1.A'
        ],
        'Miroslav Láber' => [
            'trieda' => '9.A'
        ],
        'Svetozár Korbel' => [
            'trieda' => '9.A'
        ],
        'Dušan Cinkota' => [
            'trieda' => '2.5'
        ],
        'Peter Hrivňák' => [
            'trieda' => '9.A'
        ],
        'Adam Šangala' => [
            'trieda' => '5.D'
        ],
        'Adam Ďurica' => [
            'trieda' => '6.B'
        ],
        'Jožo Ráž' => [
            'trieda' => '1.A'
        ],
    ];
    
    echo "<table border='1' cellpadding='5' cellspacing='2'>";
    echo "<tr><th>Meno</th><th>Trieda</th></tr>";
    
    $i = 1;
    foreach ($osoby as $meno => $trieda) {
        if ($i % 2 == 1) {
            echo '<tr class="pozadie">';
        } else {
            echo "<tr>";
        }
    
        echo "<td>" . $meno . "</td>";
        echo "<td>" . $trieda['trieda'] . "</td>";
    
        echo "</tr>";
        $i++;
    }
    
    echo "</table>";*/

    $jednotka = 0;
    $dvojka = 0;
    $trojka = 0;
    $stvorka = 0;
    $patka = 0;
    $sestka = 0;

    for($i = 0; $i <= 20; $i++){
        $random = random_int(1,6);

        if($random == 1){
            $jednotka += 1;
        } elseif ($random == 2){
            $dvojka += 1;
        } elseif ($random == 3){
            $trojka += 1;
        } elseif ($random == 4){
            $stvorka += 1;
        } elseif ($random == 5){
            $patka += 1;
        }else{
            $sestka += 1;
        }
    }

    echo $jednotka . '<br>' . $dvojka . '<br>' . $trojka . '<br>' . $stvorka . '<br>' . $patka . '<br>' . $sestka . '<br>';

    echo "<table border='1' cellpadding='5' cellspacing='2'>";
    echo "<tr><th>Číslo</th><th>Počet padnutia</th></tr>";
    echo "<tr>";
        echo "<td>Jednotka</td>";
        echo "<td>" . $trieda['trieda'] . "</td>";
    echo "</tr>";
    
    echo "</table>";
    
    ?>
    
     <!-- <form action="data.php" method="post">
     <input type="text" name="jedna">
     <input type="submit" value="Odoslať">
     </form> -->

    
</body>
</html>