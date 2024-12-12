<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $meno = $_POST['meno'];
        $priezvisko = $_POST['priezvisko'];
        $email = $_POST['email'];
        $heslo = $_POST['password'];
        $podHeslo = $_POST['podPassword'];
        $pohlavie = $_POST['gender'] ?? '';
        $krajina = $_POST['countries'] ?? '';
        $poznamky = trim($_POST['notes']);
        $suhlas = isset($_POST['terms']);

        $chyby = [];
        
        if($heslo != $podHeslo){
            array_push($chyby, 'Heslá sa nezhodujú');
        }

        if(empty($krajina)){
            array_push($chyby, 'Nezadal si krajinu');
        }

        if($suhlas == false){
            array_push($chyby, 'Nesúhlasil si s podmienkami');
        }
        
        $pocetChyb = count($chyby);

        if($pocetChyb == 0){
            echo "<h3>Všetky premenné:</h3>";
            $vsetkyPremenne = get_defined_vars();
            foreach ($vsetkyPremenne as $nazov => $hodnota) {
                if (is_array($hodnota)) {
    
                } else {
                    echo "$nazov = $hodnota<br>";
                }
            }
        }else{
            foreach($chyby as $chyba){
                echo $chyba . '<br>';
            }
        }
        
    ?>
