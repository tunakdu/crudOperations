<?php
// ! Github: tunakdu

// ! https://medium.com/@akduhant

// ! Crud İşlemleri Örnek Çalışmasıdır.
include 'veritabani.php';

$veriID = $_GET["id"];
$veriGetir = $pdo->prepare("select * from romanlar where id =:id");
$veriGetir->bindParam(":id", $veriID);
$veriGetir->execute();
$veri = $veriGetir->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <form action="" method="POST">
          <div>
               <label for="">Roman Adı : </label>
               <input type="text" name="romanAdi" value="<?=$veri["romanAdi"]?>">
          </div>
          <br>
          <div>
               <label for="">Roman Yazarı : </label>
               <input type="text" name="romanYazari" value="<?=$veri["romanYazari"]?>">
          </div>
          <br>
          <button type="submit">Güncelle</button>
     </form>
     <?php
          
          if($_POST){
          $veriGuncelle = $pdo -> prepare("update romanlar set romanAdi=:romanAdi, romanYazari=:romanYazari where id=:id");
          $veriGuncelle -> bindParam(":romanAdi",$_POST["romanAdi"]);
          $veriGuncelle -> bindParam(":romanYazari",$_POST["romanYazari"]);
          $veriGuncelle -> bindParam(":id",$veriID);
          $veriGuncelle -> execute();
          }
     ?>
</body>

</html>