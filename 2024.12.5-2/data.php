<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $heslo = $_POST['heslo'];
        $potvrdenie = $_POST['potvrdenie'];

        $dlzka = false;
        $spravnost = false;

        $chyby = [];
        
        $dlzka = kontrola_dlzky($heslo, $chyby);
        function kontrola_dlzky ($heslo, $chyby){
            $pocetZnakov = mb_strlen($heslo);
            
            if($pocetZnakov >= 8){
                $dlzka = true;
            }else{
                array_push($chyby, 'Heslo má menej ako 8 znakov');    
            }
        };
        
        function kontrola_spravnosti($heslo, $potvrdenie, $chyby){
            if($heslo == $potvrdenie){
                return true;
            }else{
                array_push($chyby, 'Heslá sa nezhodujú');
            }
        };
        
        kontrola_spravnosti($heslo, $potvrdenie, $chyby);

        echo $dlzka;

        if($dlzka == true && $spravnost == true){
            echo 'všetko je v poriadku';
        }else{
            $pocet_chyb = count($chyby);

            if($pocet_chyb > 0){
                foreach($chyby as $chyba){
                    echo '<h1 style = color:red;> ' . $chyba . '</h1><br>';
                }
            }
        }

        if('a' > 'A'){
            echo 'a je väčšie';
        }else{
            echo 'A je väčšie';
        }
    ?>
</body>
</html>