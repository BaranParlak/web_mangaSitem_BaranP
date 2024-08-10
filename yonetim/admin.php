<?php
require 'baglan.php';
$baglan = baglanti();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["kaydet"])) {
    $img_url = $_POST["img_url"];
    $img_title = $_POST["img_title"];
    $link_url = $_POST["link_url"];
    $kategori = $_POST["kategori"];
    
    $sql = "INSERT INTO mangaveritabanı (img_url,img_title,link_url,kategori) VALUES ('$img_url','$img_title','$link_url','$kategori')";
    
    if ($baglan->query($sql) === true) {
        $message = "İŞLEM BAŞARILI OLDU";
    } else {
        $message = "İŞLEM BAŞARISIZ";
    }
}

include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Admin sayfasina hosgeldiniz..<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
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
    <form action="admin.php" method="POST">
        RESİM URL: <input type="text" name="img_url"><br><br>
        MANGA ADI: <input type="text" name="img_title"><br><br>
        LİNK URL: <input type="text" name="link_url"><br><br>
        kategori: <input type="text" name="kategori"><br><br>
        <input type="submit" value="kaydet" name="kaydet">
    </form>
    
</body>
</html>
