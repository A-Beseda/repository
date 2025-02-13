<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrat</title>
</head>
<body>
    
<?php   
// bol som tu

function vypis () {
    $polozky = [
        'telefon' => [
            'cena' => 500,
            'mnozstvo' => 1,
        ], 

        'smart_hodinky' => [  
            'cena' => 120,
            'mnozstvo' => 8,
        ],

        'airpods' => [
            'cena' => 120,
            'mnozstvo' => 8,
        ],

        'notebook' => [
            'cena' => 900,
            'mnozstvo' => 2,
        ],
        
        'tablet' => [
            'cena' => 450,
            'mnozstvo' => 1,
        ],
        
        'notebook' => [
            'cena' => 450,
            'mnozstvo' => 1,
        ],
    ];
    return $polozky;
};

// //Najpredávanejší


// function najpredavanejsi ($polozky){
//     $suma = [];
//     foreach ($polozky as $produkt => $detail) {
//         $suma[$produkt] = $suma[$produkt] ?? 0;  
//         $suma[$produkt] += $detail['mnozstvo'];  
//     }
//         arsort($suma); 
//         return array_key_first($suma) . 
//         "(". reset($suma). "ks)";
// }



// function priemer (array $cisla){
//     if (count ($cisla)===0){
//         return 0;
//     }
// }


// $sucet = array_sum($cisla);
// $pocet = count ($cisla);
// return $sucet / $pocet ;
// echo "Priemer je". priemer($);

// //Najpredávanejší

  
function obrat($polozky){
    $spolu = 0;
    foreach ($polozky as $produkt => $detaily){
        $spolu += $detaily['cena'] * $detaily['mnozstvo'];
    }

    return $spolu;
} 
 



 echo '<h2>Report o predaji</h2>';
 echo '<p><strong>Celkový obrat:</strong> ' . obrat(vypis()) . ' €</p>';
//  echo '<p><strong>Najpredávanejší produkt je:</strong> ' . najpredavanejsi(vypis());
 echo '<p><strong>Priemerná cena produktov:</strong> ';

?>




</body>
</html>