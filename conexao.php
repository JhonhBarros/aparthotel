<?php
$host = "127.0.0.1"; // ou localhost
$db   = "aparthotel";
$user = "root";      // use "root" por enquanto
$pass = "";          // se não tem senha no MySQL, deixe vazio

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conectado ao banco de dados!";
} catch (PDOException $e) {
    echo "❌ Erro na conexão: " . $e->getMessage();
}
?>
