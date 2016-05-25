<?php 
$dsm = 'mysql:dbname=rehber;host=localhost';
$user = 'root';
$password='';
try{
	$db = new PDO($dsm,$user,$password);
	//echo"Bağlantı Sağlandı";
	
	
	
	} 
	catch(PDOExpection $e)
	{
    echo 'Bağlantı Sağlanamadı';  $e->getMessage();
		
		}




?>