<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*$prve = 1;
        $druhe = 2;
        $tretie = 0;

        $najvacsie;
        $najmensie;

        if ($prve >= $druhe && $prve >= $tretie) {
            echo $prve. " je najväčšie";

            if ($druhe >= $tretie) {
                echo "<br>".$druhe. " je druhé najväčšie";
                echo "<br>".$tretie. " je najmenšie";
            }else{
                echo "<br>".$tretie. " je druhé najväčšie";
                echo "<br>".$druhe. " je najmenšie";
            }
        }else if ($druhe >= $prve && $druhe >= $tretie) {
            echo$druhe. " je najväčšie";

            if ($prve >= $tretie) {
                echo "<br>".$prve. " je druhé najväčšie";
                echo "<br>".$tretie. " je najmenšie";
            }else{
                echo "<br>".$tretie. " je druhé najväčšie";
                echo "<br>".$prve. " je najmenšie";
            }
        }else if ($tretie >= $prve && $druhe <= $tretie) {
            echo $tretie. " je najväčšie";

            if ($druhe >= $prve) {
                echo "<br>".$druhe. " je druhé najväčšie";
                echo "<br>".$prve. " je najmenšie";
            }else{
                echo "<br>".$prve. " je druhé najväčšie";
                echo "<br>".$druhe. " je najmenšie";
            }
        }*/

        $a = 4;
        $b = 3;
        $c = 5;
    
        if(($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) { 
            echo "Trojuholník so stranami: <br> a = " . $a . "<br> b = " . $b . "<br> c = " . $c . "<br> sa dá zostrojiť <br> --------------- <br>";
    
            if(($a*$a + $b*$b == $c*$c) || ($b*$b + $c*$c == $a*$a) || ($a*$a + $c*$c == $b*$b)){
                echo "Trojuholník je pravouhlý <br>";
            } else if($a == $b && $b == $c){
                echo "Trojuholník je rovnostranný <br>";
            } else if($a == $b || $b == $c || $a == $c){
                echo "Trojuholník je rovnoramenný <br>";
            } else {
                echo "Trojuholník je rôznostranný <br>";
            }
        } else {
            echo "Trojuholník so stranami: <br> a = " . $a . "<br> b = " . $b . "<br> c = " . $c . "<br> sa nedá zostrojiť <br>";
        }
    ?>
</body>
</html>