<?php
$host = 'localhost';
$dbname = "komenty_db";
$username = 'root';
$password = '';

try {
    // Pripojenie k databáze
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Chyba pripojenia: " . $e->getMessage());
}

// Funkcia na vymazanie komentára podľa ID
function deleteComment($pdo, $id) {
    $sql = "DELETE FROM koment WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);
}

// Funkcia na generovanie náhodného komentára
function generateRandomComment($pdo) {
    $names = ["Peter", "Jana", "Marek", "Lucia", "Martin", "Eva", "Jakub", "Zuzana"];
    $comments = [
        "Toto je super!",
        "Skvelý nápad!",
        "Toto ma zaujalo.",
        "Pekný dizajn stránky!",
        "Myslím, že by to mohlo fungovať.",
        "To som ešte nevidel.",
        "Paráda, len tak ďalej!",
        "Dobrý komentár!"
    ];
    
    $randomName = $names[array_rand($names)];
    $randomComment = $comments[array_rand($comments)];
    $cas = date("Y-m-d H:i:s");

    $sql = "INSERT INTO koment (autor, text, cas) VALUES (:autor, :text, :cas)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["autor" => $randomName, "text" => $randomComment, "cas" => $cas]);
}

// Spracovanie formulárov (odoslanie komentára, generovanie a mazanie)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete_id"])) {
        deleteComment($pdo, $_POST["delete_id"]);
        header("Location: index.php"); // Reload stránky po vymazaní
        exit();
    } elseif (isset($_POST["generate"])) {
        generateRandomComment($pdo);
        header("Location: index.php"); // Reload stránky po generovaní
        exit();
    } elseif (isset($_POST["autor"]) && isset($_POST["text"])) {
        $autor = trim($_POST["autor"]);
        $text = trim($_POST["text"]);
        $cas = date("Y-m-d H:i:s");

        if (!empty($autor) && !empty($text)) {
            $sql = "INSERT INTO koment (autor, text, cas) VALUES (:autor, :text, :cas)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(["autor" => $autor, "text" => $text, "cas" => $cas]);
        }
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentáre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding-bottom: 80px;
            /* Rezerva pre formulár */
        }

        /* 📜 Sekcia komentárov */
        .komentare {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        /* 📌 Každý komentár na celú šírku */
        .komentar {
            display: flex;
            align-items: flex-start;
            background: white;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            transition: background 0.2s;
        }

        .komentar:nth-child(odd) {
            background: #f8f9fa;
        }

        /* 🖼️ Profilová fotka */
        .profilovka {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .obsah {
            flex: 1;
        }

        .autor {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .cas {
            font-size: 12px;
            color: gray;
            margin-left: 10px;
        }

        .text {
            font-size: 14px;
            color: #555;
            margin-top: 5px;
            line-height: 1.4;
            word-wrap: break-word;
        }

        .comment-form {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #fff;
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
        }

        .autor {
            flex: 0.3;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
            max-width: 200px;
        }

        input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #1877f2;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.2s;
            margin-left: 10px;
            margin-right: 50px;
        }

        button:hover {
            background-color: #165cbb;
        }

        .autorM {
            margin-left: 60px;
            margin-right: 160px;
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 200px;
        }

        .delete-btn {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 10px;
            transition: 0.2s;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>

<!-- Formulár na odoslanie komentára -->
<div class="comment-form">
    <form method="POST">
        <input class="autorM" type="text" name="autor" placeholder="Tvoje meno">
        <input class="text" type="text" name="text" placeholder="Napíš komentár...">
        <button type="submit">Odoslať</button>
        <button type="submit" name="generate" class="generate-btn">Generovať komentár</button>
    </form>
</div>

<!-- Výpis komentárov -->
<div class="komentare">
    <?php
    $sql = "SELECT id, autor, text, cas FROM koment ORDER BY id DESC";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='komentar'>";
        echo "<img src='https://i.pravatar.cc/50?u=" . urlencode($row['autor']) . "' alt='Profilová fotka' class='profilovka'>";
        echo "<div class='obsah'>";
        echo "<p class='autor'>" . htmlspecialchars($row['autor']) . " <span class='cas'>(" . $row['cas'] . ")</span></p>";
        echo "<p class='text'>" . nl2br(htmlspecialchars($row['text'])) . "</p>";
        echo "</div>";
        echo "<form method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
        echo "<button type='submit' class='delete-btn'><i class='fas fa-trash'></i></button>";
        echo "</form>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
