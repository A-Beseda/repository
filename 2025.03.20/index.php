<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prvá databáza</title>
</head>
<body>
    
    <form action="data.php" method="POST">

        <div class="formular">
        <label for="meno">Meno: </label>
        <input type="text" name="meno" required>
        </div>

        <div class="formular">
            <label for="priezvisko">Priezvisko:</label>
            <input type="text" name="priezvisko" required>
            
        </div>

        <div class="form-example">
            <input type="submit" value="Odoslať" />
        </div>

    </form>
</body>
</html>