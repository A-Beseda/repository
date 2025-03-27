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

// Skontrolujeme, či boli odoslané údaje
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $meno = $_POST['autor'];
    $komentar = $_POST["text"];
    $cas = date("Y-m-d H:i:s"); // Aktuálny čas

    // SQL príkaz pre tabuľku `koment` (id sa generuje automaticky)
    $sql = 'INSERT INTO koment (autor, text, cas) VALUES (:autor, :text, :cas)';
   
    $stmt = $pdo->prepare($sql);

    // Vykonanie SQL príkazu
    $stmt->execute(["autor" => $meno, "text" => $komentar, "cas" => $cas]);

    echo 'Komentár bol úspešne uložený!';
    
    // Presmerovanie na hlavnú stránku
    header("Location: index.php");
    exit();
}
?>
