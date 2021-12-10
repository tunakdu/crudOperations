<?php
// ! Github: tunakdu

// ! https://medium.com/@akduhant

// ! Crud İşlemleri Örnek Çalışmasıdır.

include "veritabani.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Roman Ekleme İslemi</title>
</head>
     <body>
          <form action="" method="POST">
               <div>
                    <label for="">Roman Adı : </label>
                    <input type="text" name="romanAdi">
               </div>
               <br>
               <div>
                    <label for="">Roman Yazarı : </label>
                    <input type="text" name="romanYazari">
               </div>
               <br>
               <button type="submit">Ekle</button>
          </form>
          <?php
          if ($_POST) {
               $romanEkle = $pdo->prepare("insert into romanlar (romanAdi, romanYazari) values (:romanAdi,:romanYazari)");
               $romanEkle->bindParam(":romanAdi", $_POST["romanAdi"]);
               $romanEkle->bindParam(":romanYazari", $_POST["romanYazari"]);
               $romanEkle->execute();
          }
          ?>
     </body>
</html>