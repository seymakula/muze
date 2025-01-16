
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (function_exists('mysqli_connect')) {
    echo "PHP kodu çalışıyor!";
} else {
    echo "PHP kodu çalışmıyor!";
}



// Veritabanı bağlantısı
$host = "localhost";
$user = "root";
$password = ""; // XAMPP'de varsayılan şifre boştur
$dbname = "site_db"; // Veritabanı adını kontrol et

$conn = new mysqli($host, $user, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}

// Veritabanından mesaj çek
$query = "SELECT mesaj FROM mesajlar LIMIT 1";
$result = $conn->query($query);

// Mesajı yazdır
if ($result->num_rows > 0) {
    $mesaj = $result->fetch_assoc()['mesaj'];
    echo $mesaj;
} else {
    echo "Mesaj bulunamadı.";
}
?>

