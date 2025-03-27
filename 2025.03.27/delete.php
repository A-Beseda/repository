<?php
$host = 'localhost';
$dbname = "komenty_db";
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Chyba pripojenia: " . $e->getMessage());
}

// Skontrolujeme, či bola odoslaná požiadavka na vymazanie
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM koment WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);

    header("Location: index.php"); // Presmerovanie späť na hlavnú stránku
    exit();
}
?>