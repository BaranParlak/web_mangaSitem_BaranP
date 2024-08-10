<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Admin Paneli</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Anasayfa</a></li>
            <li><a href="icerikyonetim.php">İçerik Yönetimi</a></li>
            <li><a href="icayarlar.php">İç Ayarlar</a></li>
            <li><a href="../projeAlternatifim.php">Çıkış</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Anasayfa</h2>
        <p>Hoş geldiniz, admin! Burası admin panelinin ana sayfasıdır.</p>
    </div>
</body>
</html>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Temel stiller */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 15px 0;
}

.header h1 {
    margin: 0;
}

.menu {
    background-color: #eee;
    width: 200px;
    float: left;
    height: 100vh; /* Sayfa yüksekliği kadar menüyü genişlet */
}

.menu ul {
    list-style: none;
    padding: 0;
}

.menu ul li {
    border-bottom: 1px solid #ddd;
}

.menu ul li a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
    transition: background-color 0.3s ease;
}

.menu ul li a:hover {
    background-color: #f9f9f9;
}

.content {
    padding: 20px;
    margin-left: 220px; /* Menü genişliği + boşluk */
}
</style>