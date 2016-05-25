<title>KİŞİYİ KAYDET</title>
<?php 
include "baglanti.php";
$Ad = $_POST["Ad"];
$Mobilno = $_POST["Mobilno"];
$Evno = $_POST["Evno"];
$Eposta = $_POST["Eposta"];
$Adres = $_POST["Adres"];


$md =$db->prepare("INSERT INTO bilgiler(Ad,Mobilno,Evno,Eposta,Adres)VALUES(?,?,?,?,?)");
$md->execute(array($Ad,$Mobilno,$Evno,$Eposta,$Adres));
echo "KİŞİ KAYDEDİLDİ.";
header("refresh:5;url=index.php");







?>