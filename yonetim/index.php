<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="post">  <!-- burayı php olarak düzenlicem sonra  -->  <!-- method"post" veriler adres çubuğunda gözükmesin diye  --> 
        <h1>Giriş</h1>
        <div class="input-box">
            <input type="text" placeholder="Kullanıcı Adı" name="username" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder="Şifre" name="password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        
        <button type="submit" value="Giris" class="btnG">Giriş</button>
        <div class="geri-dön"> 
            <a href="../projeAlternatifim.php"><i class='bx bxs-home-alt-2' ></i></a>
        </div>
       
        
        </form>
    </div>
</body>
</html>