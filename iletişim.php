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
    </header>
    <!-- iletişim -->
    <section id="İletişim">
        <div class="section_title">    
            <h2>İletişime Geç</h2>
        </div>    
        <div class="inner_contact">
            <div class="child_contact">
                <img src="resimler/iletişimresim.jpg" alt="">    <!-- resim eklicem bulunca -->
            </div>
            <div class="child_contact">
                <form action="#">
                    <input placeholder="İsim" type="text" name="fullname">
                    <input placeholder="E-mail" type="text" name="fullname">
                    <input placeholder="Tel" type="text" name="fullname">
                    <textarea placeholder="Mesaj" name="message" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="Gönder">
                </form>
            </div>

        </div>
    </section>

</body>
</html>
