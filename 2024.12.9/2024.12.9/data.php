<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $heslo = $_POST["heslo"];
        $potvrdenie = $_POST["potvrdenie"];

        $dlzka = mb_strlen($heslo);

        if($heslo == $potvrdenie){
            if($dlzka >= 8){
                if((preg_match('/[A-Z]/', $heslo) && preg_match('/[a-z]/', $heslo))){
                    echo "všetko je správne";
                }else{
                    echo "Heslo musí mať aspoň 8 znakov a obsahovať veľké a malé písmená";
                }
            }else{
                echo "Heslo musí mať aspoň 8 znakov a obsahovať veľké a malé písmená";
            }
        }else{
            echo "Heslá sa nezhodujú";
        }
    ?>
</body>
</html>