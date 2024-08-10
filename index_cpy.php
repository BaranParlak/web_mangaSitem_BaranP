<?php
require 'baglan.php';
$baglan = baglanti();
$message = "";

// Veri ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["kaydet"])) {
    $img_url = $_POST["img_url"];
    $img_title = $_POST["img_title"];
    $link_url = $_POST["link_url"];
    
    // Güvenli bir şekilde SQL sorgusu oluşturmak için prepared statements kullanılabilir
    $sql = "INSERT INTO mangaveritabanı (img_url, img_title, link_url) VALUES (?, ?, ?)";
    $stmt = $baglan->prepare($sql);
    $stmt->bind_param("sss", $img_url, $img_title, $link_url);

    if ($stmt->execute()) {
        $message = "İŞLEM BAŞARILI OLDU";
    } else {
        $message = "İŞLEM BAŞARISIZ";
    }
    $stmt->close();
}

session_start();
if (!isset($_SESSION["login"])) {
    echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
} else {
    echo "Admin sayfasına hoş geldiniz..<br>";
    echo "<a href=adminpanelim.php>Çıkış Yap</a>";

    function verileri_tablo_ile_bastir($baglan) {
        $sorgu = "SELECT * FROM mangaveritabanı";
        $sonuclar = $baglan->query($sorgu);

        if ($sonuclar->num_rows > 0) {
            echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Resim URL</th>
                    <th>Manga Adı</th>
                    <th>Link URL</th>
                    <th>İşlemler</th>
                </tr>";

            while ($row = $sonuclar->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["img_url"] . "</td>
                    <td>" . $row["img_title"] . "</td>
                    <td>" . $row["link_url"] . "</td>
                    <td><a href='index_cpy.php?id=" . $row["id"] . "'>Sil</a></td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "Tabloda herhangi bir veri bulunamadı.";
        }
    }

    // Veri silme işlemi
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $silme_sorgusu = "DELETE FROM mangaveritabanı WHERE id = ?";
        $stmt = $baglan->prepare($silme_sorgusu);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Veri başarıyla silindi.";
        } else {
            echo "Veri silinemedi: " . $baglan->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index_cpy.php" method="POST">
        RESİM URL: <input type="text" name="img_url"><br><br>
        MANGA ADI: <input type="text" name="img_title"><br><br>
        LİNK URL: <input type="text" name="link_url"><br><br>
        <input type="submit" value="kaydet" name="kaydet">
    </form>

    <!-- Verileri tablo olarak ekrana bastırma -->
    <?php
    if (isset($_SESSION["login"])) {
        verileri_tablo_ile_bastir($baglan);
    }
    ?>
</body>
</html>





