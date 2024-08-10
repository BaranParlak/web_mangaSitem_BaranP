<?php
require 'baglan.php';
$baglan = baglanti();

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head içeriği -->
    <link rel="stylesheet" href="mangalarortak.css">
</head>
<body>
    <!-- Navbar kısmı -->
    <!-- ... -->
    
    <section id="anasayfa">
        <div class="resimler">
            <div class="resim">';
            if (isset($_GET['kategori'])) {
                $kategori = $_GET['kategori'];

                // Güvenli sorgu yapısı kullanarak tüm resimleri getirme
                $menu = "SELECT * FROM $kategori";
                $result = $baglan->query($menu);
 
                while ($satir = $result->fetch_assoc()) {
                    echo '<img src="resimler/' . $satir['img_url'] . '" alt="Resim 1">';
                }
                $stmt->close();
            }
            echo '
            </div>
        </div>        
    </section>

</body>
</html>';
?>


