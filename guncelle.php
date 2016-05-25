<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KİŞİYİ GÜNCELLE</title>
</head>

<body>
<?php
include "baglanti.php";

$Ad = $_POST["Ad"];
$Mobilno = $_POST["Mobilno"];
$Evno = $_POST["Evno"];
$Eposta = $_POST["Eposta"];
$Adres = $_POST["Adres"];

     $id = $_POST["id"];
     $md =$db ->prepare("UPDATE bilgiler SET Ad=?, Mobilno= ?, Evno= ? ,Eposta= ?, Adres= ? WHERE RehberID= ?");
     $md ->execute(array($Ad,$Mobilno,$Evno,$Eposta,$Adres,$id));


?>
</body>
</html>