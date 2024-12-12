<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
</head>
<body>
<form action="data.php" method="post">
        <label for="heslo">Heslo:</label><br>
        <input type="text" id="heslo" name="heslo" required><br>

        <label for="potvrdenie">Potvrdenie hesla:</label><br>
        <input type="text" id="potvrdenie" name="potvrdenie" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>