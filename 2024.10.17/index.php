<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trénujeme polia</title>
</head>
<body>
    <?php

    //
    // Vytvorenie indexovaného poľa
    //

    $mesiaceRoku = ['januar','februar','marec','april','maj','jun','jul','august','september','oktober','november','december'];

    $rozneTypy = [1,'kamarat',3.14159];
    //
    //výpis poľa
    //
    /*echo '<h2>Var_dump</h2>';

    var_dump ($mesiaceRoku);
    
    echo '<br>';
    echo '<br>';

    echo '<h2>print_r</h2>';

    print_r($mesiaceRoku);
    
    echo '<br>';
    echo '<br>';

    echo '<h2>Var_dump v -pre- elemente</h2>';

    echo "<pre>";
    echo var_dump($mesiaceRoku);
    echo "</pre>";

    echo '<br>';
    echo '<br>';

    echo '<h2>print_r v -pre- elemente</h2>';

     echo "<pre>";
     echo print_r($mesiaceRoku);
     echo "</pre>";
     */

     echo'Jarné mesiace sú '. $mesiaceRoku[2] .' '. $mesiaceRoku[3] .' '. $mesiaceRoku[4] . '.';
     echo '<br>';

     echo'Letné mesiace sú '. $mesiaceRoku[5] .' '. $mesiaceRoku[6] .' '. $mesiaceRoku[7] . '.';
     echo '<br>';

     echo'Jasené mesiace sú '. $mesiaceRoku[8] .' '. $mesiaceRoku[9] .' '. $mesiaceRoku[10] . '.';
     echo '<br>';

     echo'Zimné mesiace sú '. $mesiaceRoku[11] .' '. $mesiaceRoku[0] .' '. $mesiaceRoku[1] . '.';
     echo '<br>';



    //
    //výpis prvku
    //



    //
    // zreťazenie poľa
    //



    ?>
</body>
</html>