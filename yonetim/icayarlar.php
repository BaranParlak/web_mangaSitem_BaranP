<?php

require 'baglan.php';
$baglan = baglanti();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["kaydet1"])) {
    $img_url = $_POST["img_url"];
    $sql = "INSERT INTO villaintokill (img_url) VALUES ('$img_url')";
    
    if ($baglan->query($sql) === true) {
        $message = "İŞLEM BAŞARILI OLDU";
    } else {
        $message = "İŞLEM BAŞARISIZ";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["kaydet2"])) {
    $img_url = $_POST["img_url"];
    $sql = "INSERT INTO dukependragon(img_url) VALUES ('$img_url')";
    
    if ($baglan->query($sql) === true) {
        $message = "İŞLEM BAŞARILI OLDU";
    } else {
        $message = "İŞLEM BAŞARISIZ";
    }
}

function verileri_tablo_ile_bastir($baglan) {
    $sorgu = "SELECT * FROM villaintokill";
    $sonuclar = $baglan->query($sorgu);

    if ($sonuclar->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Resim URL</th>
                <th>İşlemler</th>
            </tr>";

        while ($row = $sonuclar->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["img_url"] . "</td>
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

    $silme_sorgusu = "DELETE FROM villaintokill WHERE id = $id";

    if ($baglan->query($silme_sorgusu) === TRUE) {
        echo "";
    } else {
        echo "Veri silinemedi: " . $baglan->error;
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
<div class="header">
        <h1>MANGALARIM</h1>
    </div>
    
    <form action="icayarlar.php" method="POST">
     <table border="1" style="border-collapse:collapse;">
        <tr style="background-color:yellow"><td colspan=2> VİLLAİN TO KİLL</td></tr>
        <tr><td>Sayfa Url:</td>
         <td><input type="text" name="img_url"></td>
        </tr>
        <tr><td colspan=2><input type="submit" value="kaydet" name="kaydet1"></td></tr>
         <br><br>
        
        </table>
    </form>
    <form action="icayarlar.php" method="POST">
     <table border="1" style="border-collapse:collapse;">
        <tr style="background-color:yellow"><td colspan=2> DUKE PENDRAGON</td></tr>
        <tr><td>Sayfa Url:</td>
         <td><input type="text" name="img_url"></td>
        </tr>
        <tr><td colspan=2><input type="submit" value="kaydet" name="kaydet2"></td></tr>
         <br><br>
        
        </table>
    </form>
    <!-- Verileri tablo olarak ekrana bastırcam -->
    <?php
    if (isset($_SESSION["login"])) {
        verileri_tablo_ile_bastir($baglan);
    }
    ?>
</body>
</html>
<style>
.header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    font-family:Arial;
}

.header h1 {
    margin: 0;
}
form{
    float:left;
}
form table{
    margin-left:20px;
   float:left;
}
</style>