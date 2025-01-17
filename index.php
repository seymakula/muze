<?php
$host = 'localhost';
$user = 'root';
$pass = ''; 
$db = 'site_db'; 


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$successMessage = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $ad_soyad = isset($_POST['ad_soyad']) ? $_POST['ad_soyad'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mesaj = isset($_POST['mesaj']) ? $_POST['mesaj'] : '';

    
    $sql = "INSERT INTO kullanicilar (ad_soyad, email, mesaj) VALUES ('$ad_soyad', '$email', '$mesaj')";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Kullanıcı başarıyla eklendi!";
    } else {
        $successMessage = "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Ekleme</title>
</head>
<body>
    <h2>Kullanıcı Ekle</h2>
    
    
    <?php if ($successMessage != ''): ?>
        <p><?php echo $successMessage; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="ad_soyad">Ad Soyad:</label>
        <input type="text" name="ad_soyad" id="ad_soyad" required><br><br>

        <label for="email">E-posta:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mesaj">Mesaj:</label><br>
        <textarea name="mesaj" id="mesaj" rows="4" cols="50" required></textarea><br><br>

        <button type="submit" name="submit">Kaydet</button>
    </form>
</body>
</html>



