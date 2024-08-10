<?php

function head_ustkismi(){
echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARAnime</title>
    
    <link rel="stylesheet" href="animeSayfa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <h2><a href="projeAlternatifim.php">BARAnime</a></h2>
            </div>
            <ul class="nav_links">
                <li><a href="projeAlternatifim.php"><i class="fa-solid fa-house"></i>Anasayfa</a></li>
                <li><a href="animeSayfa.php"><i class="fa-solid fa-film"></i>Anime</a></li>
                <li><a href="mangaSayfa.php"><i class="fa-solid fa-book"></i>Manga</a></li>
                <li><a href="hakkımda.php"><i class="fa-solid fa-info"></i>Hakkımda</a></li>
                <li><a href="iletişim.php"><i class="fa-regular fa-envelope"></i>İletişim</a></li>
            </ul>
        </div>
    </header>';
}
function ana_icerik($baglan){
    echo'
    <section id="anasayfa">

       <div class="orta">    <!-- kes -->';
          $menu="SELECT * FROM mangaveritabanı";
          $menucek=$baglan->query($menu);
          while($satir=$menucek->fetch_assoc()){
            $kategori=$satir['kategori'];
            echo'
        <a href="alticerik.php?kategori='.$kategori.'">
            <div class="resim-kutucugu">
                <img src="resimler/'.$satir['img_url'].'" alt="Resim 1">
                <h3>'.$satir['img_title'].'</h3>
            </div>
        </a>';
          }
          echo'
    
        



       </div>      <!-- kes -->

        

       
        

    </section>';
}


?>
