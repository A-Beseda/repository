<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <form action="" method="post">
        <label for="heslo">Príklad </label>
        <input type="text", name="priklad" , id="heslo" required><br>

        <input type="submit" value="Potvrdiť">
    </form>

    <br><br><br>
    <h1>Výsledok:</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
       /* $vstup = trim($_POST ["priklad"]);

        $c1 = (int) $vstup[0];
        $c2 = (int) $vstup[2];

        switch ($vstup[1]){
            case "+":
                echo $c1 + $c2;
                break;
            case "-":
                echo $c1 - $c2;
                break;
            case "*":
                echo $c1 * $c2;
                break;
            case "/":
                echo $c1 / $c2;
                break;
        }*/

        $sifra = ($_POST["priklad"]);

        $dlzka = strlen($sifra);

        for($i = 0; $i <= $dlzka; $i++){
            echo $sifra[$i] . " || " . ord($sifra[$i]) . " || " . ord($sifra[$i])+3;
            echo "<br>";
        }
    }
    ?>
</body>

</html>