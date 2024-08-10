<?php
function baglanti(){
    $baglan = mysqli_connect("localhost", "root", "", "ilkveritabanim");
    mysqli_set_charset($baglan, "UTF8");
    if(mysqli_connect_errno()>0){
        die("Bağlantı hatası: " . mysqli_connect_errno());
    }
    return $baglan;
}
?>