<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TELEFON REHBERİ</title>
<link href="rehber.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="cerceve">
<div class="ustalan">REHBER</div>
<div id="ortaalan">
    <form action="kaydet.php" method="post">
          <table>
          <tr>
        <td>AD SOYAD:</td> 
        <td><input type="text" name="Ad" /></td>
          </tr>
          <tr>
        <td>MOBİL NO:</td> 
        <td><input type="text" name="Mobilno" /></td>
          </tr>
          <tr>
       <td> EV NO   :</td>
       <td><input type="text" name="Evno" /></td>
          </tr>
          <tr>
        <td>E-MAİL  :</td> 
        <td><input type="text"  name="Eposta"/></td>
          </tr>
          <tr>
        <td>ADRES   :</td> 
        <td><textarea name="Adres"></textarea></td>
          </tr>
          <tr>
          <td><input type="submit" value="KİŞİYİ EKLE" /></td>
          </tr>
        </table>
         </form>
         <form action="listele.php" method="post">
         <table>
         <tr>
          <td><input type="submit" value="KİŞİLERİ LİSTELE"  /></td>
          </tr>
          </table>
         </form>
         <form action="sil.php" method="post">
         <table>
         <tr>
          <td><input type="text" name="id" /></td>
          <td><input type="submit" value="KİŞİYİ SİL"  /></td>
          </tr>
          </table>
         </form>
         <form action="guncelle1.php" method="post">
         <table>
         <tr>
          <td><input type="text" name="id"/></td>
          <td><input type="submit" value="KİŞİYİ GÜNCELLE" name="degistir" /></td>
          </tr>
          </table>
         </form>
   
</div>
</div>
</body>
</html>
