<title>KİŞİYİ SİL</title>
<?php

include "baglanti.php";
$md =$db-> prepare("SELECT * FROM bilgiler");
$md->execute();
$result =$md ->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $yaz){
	echo "Ad : ".$yaz["Ad"]."<br/>";
	echo "Mobilno : ".$yaz["Mobilno"]."<br/>";
	echo "Evno : ".$yaz["Evno"]."<br/>";
	echo "Eposta : ".$yaz["Eposta"]."<br/>";
	echo "Adres : ".$yaz["Adres"]."<br/><br/><br/>";
	
	
}
?>

