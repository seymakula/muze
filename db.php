<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=site_db', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanına bağlantı sağlanamadı: " . $e->getMessage());
}
?>


