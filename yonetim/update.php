<?php
require_once "baglan.php";
$baglan = baglanti();
$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['guncelle'])) {
    $img_url = $_POST["resim"];
    $img_title = $_POST["manga_adi"]; 
    $link_url = $_POST["link"]; 
    $kategori = $_POST["kategori"]; 

    $sorgu = "UPDATE mangaveritabanı SET 
        img_url=?, img_title=?, link_url=?, kategori=?
        WHERE id=?";

    $stmt = $baglan->prepare($sorgu);
    $stmt->bind_param("ssssi", $img_url, $img_title, $link_url, $kategori, $id);
    $stmt->execute();
    $stmt->close();
}

$menu = "SELECT * FROM mangaveritabanı WHERE id=$id";
$menucek = $baglan->query($menu);
$satir = $menucek->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php?id=<?php echo $id;?>" method="POST">
        RESİM:<input type="text" name="resim" value="<?php echo $satir['img_url']?>">
        MANGA ADI:<input type="text" name="manga_adi" value="<?php echo $satir['img_title']?>"> 
        LİNK:<input type="text" name="link" value="<?php echo $satir['link_url']?>">
        KATEGORİ:<input type="text" name="kategori" value="<?php echo $satir['kategori']?>">
        <input type="submit" name="guncelle" value="Güncelle">
    </form>
</body>
</html>


