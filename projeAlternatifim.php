<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARAnime</title>
    <link rel="stylesheet" href="projeAlternatifim.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <h2><a href="#">BARAnime</a></h2>
            </div>
            <ul class="nav_links">
                <li><a href="projeAlternatifim.php"><i class="fa-solid fa-house"></i>Anasayfa</a></li>
                <li><a href="animeSayfa.php"><i class="fa-solid fa-film"></i>Anime</a></li>
                <li><a href="mangaSayfa.php"><i class="fa-solid fa-book"></i>Manga</a></li>
                <li><a href="hakkımda.php"><i class="fa-solid fa-info"></i>Hakkımda</a></li>
                <li><a href="iletişim.php"><i class="fa-regular fa-envelope"></i>İletişim</a></li>
                <li><a href="yonetim/index.php">Giriş Yap</a></li>
            </ul>
        </div>
    </header>
    <!-- ANASAYFA -->
    <section id="anasayfa">
        <div class="inner_anasayfa">
            
            <div class="child_anasayfa">
                <img src="resimler/baringo.png" alt="">  
            </div>
            
            <div class="child_anasayfa">
                <h1>ANİME VE MANGA ÖNERİLERİ İÇİN DOĞRU ADRES <br> <span class="span_child">HADİ!</span></h1>         
            </div>

        </div>
    </section>        
    <!-- Türler -->
    <section id="Türler">
        <div class="innertür">
            <div class="innertür_child">
            <!--<div class="icon">
                    
                </div>-->
                <h3><i class="fa-solid fa-film"></i>ANİME</h3>
                <p>Repertuarım içerisinde bulunan ve önerdiğim animeler</p>
                <a href="animeSayfa.php" class="btn">Anime ARA</a>   <!-- Anime sayfasına bağlamak istediğim yer -->
 
            </div>

            <div class="innertür_child2">
            
                <h3><i class="fa-solid fa-book"></i>MANGA</h3>
                <p>Repertuarım içerisinde bulunan ve önerdiğim mangalar</p>
                <a href="mangaSayfa.php" class="btn">Manga ARA</a>          
            </div>

        </div>
    </section>    

</body>
</html>