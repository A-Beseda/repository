<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $prve = $_POST['prve'];
        $druhe = $_POST['druhe'];
        $znamienko = $_POST['znamienko'];

        if($znamienko == 'plus'){
            echo 'Výsledok príkladu '. $prve . ' + ' . $druhe . ' je ' . $prve + $druhe;
        } elseif($znamienko == 'minus'){
            echo 'Výsledok príkladu '. $prve . ' - ' . $druhe . ' je ' . $prve - $druhe;
        } elseif($znamienko == 'krat'){
            echo 'Výsledok príkladu '. $prve . ' * ' . $druhe . ' je ' . $prve * $druhe;
        }else{
            echo 'Výsledok príkladu '. $prve . ' / ' . $druhe . ' je ' . $prve / $druhe;
        }
    ?>
</body>
</html>