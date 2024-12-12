<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
</head>
<body>
    <form action="data.php" method="post">
        <input style="width: 550px; height: 300px; text-align:center; font-size:larger; background-color: lightgray; border: solid 3px lightgreen" type="text" id="prve" name="prve" placeholder="Prvé číslo">

        <select style="width: 550px; height: 300px; text-align:center; font-size:larger; background-color: lightgray; border: solid 3px lightgreen" id="znamienko" name="znamienko">
            <option value="plus">Sčítanie</option>
            <option value="minus">Odpočítanie</option>
            <option value="krat">Násobenie</option>
            <option value="deleno">Delenie</option>
        </select>

        <input style="width: 550px; height: 300px; text-align:center; font-size:larger; background-color: lightgray; border: solid 3px lightgreen" type="text" id="druhe" name="druhe" placeholder="Druhé číslo">

        <input style="width: 220px; height: 300px; text-align:center; font-size:larger; background-color: lightgray; border: solid 3px lightgreen" type="submit" value="Submit">
    </form>
</body>
</html>